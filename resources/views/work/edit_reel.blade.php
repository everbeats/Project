@extends('lib.master2')
@section('title','แก้ไขสินค้า (รอก)')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (รอก)</h5>
        <div class="card-body">
            <form action="{{action('ReelController@update',$id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="reel_name" type="text" required="" value="{{$reels->reel_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="reel_size" type="number" required="" value="{{$reels->reel_size}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="reel_color" type="text" required="" value="{{$reels->reel_color}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="reel_type" type="text">
                                <option value="{{$reels->reel_type}}">{{$reels->reel_type}}</option>
                                <option value="Spinning">Spinning Reel</option>
                                <option value="casting">Casting Reel</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="reel_brand" type="text" required="" value="{{$reels->reel_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="reel_price" type="number" required="" value="{{$reels->reel_price}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input class="form-control" name="reel_image" type="file" required="" value="{{$reels->reel_image}}"><br> 
                        </div>

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="อัพเดท">  
                <input type="hidden" name="_method" value="PATCH" >
            </form>        
        </div>
    </div>
</div>

@stop