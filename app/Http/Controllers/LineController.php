<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingLine;
use Illuminate\Support\Facades\Input;
use finfo;
class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = FishingLine::all();
        return view('work/admin_line',[
            'lines' => $lines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_line');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['line_name' => 'required',
                                  'line_size' => 'required',
                                  'line_color' => 'required',
                                  'line_type' => 'required',
                                  'line_brand' => 'required',
                                  'line_image' => 'required',
                                  'line_price' => 'required'        
        ]);
        $lines = new FishingLine(['line_name' => $request->get('line_name'),
                                  'line_size' => $request->get('line_size'),
                                  'line_color' => $request->get('line_color'),
                                  'line_type' => $request->get('line_type'),
                                  'line_brand' => $request->get('line_brand'),
                                  'line_price' => $request->get('line_price')
        ]);
        $file = Input::file('line_image');
        $contents = $file->openFile()->fread($file->getSize());
        $lines->line_image = $contents;
        $lines->save();
        return redirect()->route('line.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lines = FishingLine::find($id);
        return response()->make($lines->line_image, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($lines->line_image)
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
        $lines = FishingLine::find($id);
        return view('work/edit_line',compact('lines','id'));
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
        $this->validate($request,['line_name' => 'required',
                                  'line_size' => 'required',
                                  'line_color' => 'required',
                                  'line_type' => 'required',
                                  'line_brand' => 'required',
                                  'line_image' => 'required',
                                  'line_price' => 'required'        
        ]);
        $lines = FishingLine::find($id);
        $lines->line_name = $request->input('line_name');
        $lines->line_size = $request->input('line_size');
        $lines->line_color = $request->input('line_color');
        $lines->line_type = $request->input('line_type');
        $lines->line_brand = $request->input('line_brand');
        $file = Input::file('line_image');
        $contents = $file->openFile()->fread($file->getSize());
        $lines->line_image = $contents;
        $lines->line_price = $request->input('line_price');
        $lines->save();
        return redirect()->route('line.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lines = FishingLine::find($id);
        $lines -> delete();
        return redirect()->route('line.index');
    }
}
