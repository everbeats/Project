<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingRod;
class RodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rods = FishingRod::all();
        return view('work/admin_rod',[
            'rods' => $rods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_rod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['rod_name' => 'required',
                                  'rod_length' => 'required',
                                  'rod_color' => 'required',
                                  'rod_power' => 'required',
                                  'rod_line' => 'required',
                                  'rod_type' => 'required',
                                  'rod_brand' => 'required',
                                  'rod_image' => 'required',
                                  'rod_price' => 'required'
        ]);
        $rods = new FishingRod(['rod_name' => $request->get('rod_name'),
                                'rod_length' => $request->get('rod_length'),
                                'rod_color' => $request->get('rod_color'),
                                'rod_power' => $request->get('rod_power'),
                                'rod_line' => $request->get('rod_line'),
                                'rod_type' => $request->get('rod_type'),
                                'rod_brand' => $request->get('rod_brand'),
                                'rod_image' => $request->get('rod_image'),
                                'rod_price' => $request->get('rod_price')
        ]);
        $rods->save();
        return redirect()->route('rod.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rods = FishingRod::find($id);
        return view('work/edit_rod',compact('rods','id'));
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
        $this->validate($request,['rod_name' => 'required',
                                  'rod_length' => 'required',
                                  'rod_color' => 'required',
                                  'rod_power' => 'required',
                                  'rod_line' => 'required',
                                  'rod_type' => 'required',
                                  'rod_brand' => 'required',
                                  'rod_image' => 'required',
                                  'rod_price' => 'required'
                                  
        ]);
        $rods = FishingRod::find($id);
        $rods->rod_name = $request->input('rod_name');
        $rods->rod_length = $request->input('rod_length');
        $rods->rod_color = $request->input('rod_color');
        $rods->rod_power = $request->input('rod_power');
        $rods->rod_line = $request->input('rod_line');
        $rods->rod_type = $request->input('rod_type');
        $rods->rod_brand = $request->input('rod_brand');
        $rods->rod_image = $request->input('rod_image');
        $rods->rod_price = $request->input('rod_price');
        $rods->save();
        return redirect()->route('rod.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rods= FishingRod::find($id);
        $rods -> delete();
        return redirect()->route('rod.index');
    }
}
