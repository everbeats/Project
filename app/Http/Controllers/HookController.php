<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingHook;

use Illuminate\Support\Facades\Input;
use finfo;

class HookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hooks = FishingHook::all();
        
        return view('work/admin_hook',[
            'hooks' => $hooks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_hook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['hook_name' => 'required',
                                  'hook_size' => 'required',
                                  'hook_color' => 'required',
                                  'hook_type' => 'required',
                                  'hook_brand' => 'required',
                                  'hook_image' => 'required',
                                  'hook_price' => 'required',
        ]);
        $hooks = new FishingHook(['hook_name' => $request->get('hook_name'),
                           'hook_size' => $request->get('hook_size'),
                           'hook_color' => $request->get('hook_color'),
                           'hook_type' => $request->get('hook_type'),
                           'hook_brand' => $request->get('hook_brand'),
                           'hook_price' => $request->get('hook_price'),
        ]);
        $file = Input::file('hook_image');
        $contents = $file->openFile()->fread($file->getSize());
        $hooks->hook_image = $contents;
        $hooks->save();
        return redirect()->route('hook.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hooks = FishingHook::find($id);
        return response()->make($hooks->hook_image, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($hooks->hook_image)
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hooks = FishingHook::find($id);
        return view('work/edit_hook',compact('hooks','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['hook_name' => 'required',
                                  'hook_size' => 'required',
                                  'hook_color' => 'required',
                                  'hook_type' => 'required',
                                  'hook_brand' => 'required',
                                  'hook_image' => 'required',
                                  'hook_price' => 'required',
        ]);
        $hooks = FishingHook::find($id);
        $hooks->hook_name = $request->input('hook_name');
        $hooks->hook_size = $request->input('hook_size');
        $hooks->hook_color = $request->input('hook_color');
        $hooks->hook_type = $request->input('hook_type');
        $hooks->hook_brand = $request->input('hook_brand');
        $file = Input::file('hook_image');
        $contents = $file->openFile()->fread($file->getSize());
        $hooks->hook_image = $contents;
        $hooks->hook_price = $request->input('hook_price');
        $hooks->save();
        return redirect()->route('hook.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hooks = FishingHook::find($id);
        $hooks -> delete();
        return redirect()->route('hook.index');
    }
}
