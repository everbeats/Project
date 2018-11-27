<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingReel;
use Illuminate\Support\Facades\Input;
use finfo;
class ReelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reels = FishingReel::all();
        return view('work/admin_reel',[
            'reels' => $reels
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_reel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['reel_name' => 'required',
                                  'reel_size' => 'required',
                                  'reel_color' => 'required',
                                  'reel_type' => 'required',
                                  'reel_brand' => 'required',
                                  'reel_image' => 'required',
                                  'reel_price' => 'required'        
        ]);
        $reels = new FishingReel(['reel_name' => $request->get('reel_name'),
                                  'reel_size' => $request->get('reel_size'),
                                  'reel_color' => $request->get('reel_color'),
                                  'reel_type' => $request->get('reel_type'),
                                  'reel_brand' => $request->get('reel_brand'),
                                  'reel_price' => $request->get('reel_price')
        ]);
        $file = Input::file('reel_image');
        $contents = $file->openFile()->fread($file->getSize());
        $reels->reel_image = $contents;
        $reels->save();
        return redirect()->route('reel.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reels = FishingReel::find($id);
        return response()->make($reels->reel_image, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($reels->reel_image)
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
        $reels = FishingReel::find($id);
        return view('work/edit_reel',compact('reels','id'));
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
        $this->validate($request,['reel_name' => 'required',
                                  'reel_size' => 'required',
                                  'reel_color' => 'required',
                                  'reel_type' => 'required',
                                  'reel_brand' => 'required',
                                  'reel_image' => 'required',
                                  'reel_price' => 'required'        
        ]);
        $reels = FishingReel::find($id);
        $reels->reel_name = $request->input('reel_name');
        $reels->reel_size = $request->input('reel_size');
        $reels->reel_color = $request->input('reel_color');
        $reels->reel_type = $request->input('reel_type');
        $reels->reel_brand = $request->input('reel_brand');
        $file = Input::file('reel_image');
        $contents = $file->openFile()->fread($file->getSize());
        $reels->reel_image = $contents;
        $reels->reel_price = $request->input('reel_price');
        $reels->save();
        return redirect()->route('reel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reels = FishingReel::find($id);
        $reels -> delete();
        return redirect()->route('reel.index');
    }
}
