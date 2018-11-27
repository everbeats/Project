@extends('lib.master2')
@section('title','เพิ่มสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">เพิ่มสินค้า (รอก)</h5>
        <div class="card-body">
            <form action="{{url('admin/reel')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="reel_name" type="text" required=""><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="reel_size" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="reel_color" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="reel_type" type="text">
                                <option value=""></option>
                                <option value="Spinning">Spinning</option>
                                <option value="Casting">Casting</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="reel_brand" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="reel_price" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input class="form-control" name="reel_image" type="file" required=""><br> 
                        </div>

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="submit">  
                <a href="{{route('reel.index')}}" class="btn btn-info btn-block">กลับสู่หน้าหลัก</a>
            </form>        
        </div>
    </div>
</div>

@stop