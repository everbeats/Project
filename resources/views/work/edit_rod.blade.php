@extends('lib.master2')
@section('title','แก้ไขสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (คันเบ็ด)</h5>
        <div class="card-body">
            <form action="{{action('RodController@update',$id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="rod_name" type="text" required="" value="{{$rods->rod_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>Length (feet)</label>
                          <input class="form-control" name="rod_length" type="number" required="" value="{{$rods->rod_length}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="rod_color" type="text" required="" value="{{$rods->rod_color}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="rod_type" type="text">
                                <option value="{{$rods->rod_type}}">{{$rods->rod_type}}</option>
                                <option value="Spinning Rod">Spinning Rod</option>
                                <option value="Casting Rod">Casting Rod</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Power</label>
                            <select class="form-control" name="rod_power" type="text">
                                <option value="{{$rods->rod_power}}">{{$rods->rod_power}}</option>
                                <option value="Ultra-Light (UL)">Ultra-Light (UL)</option>
                                <option value="Light (L)">Light (L)</option>
                                <option value="Medium (M)">Medium (M)</option>
                                <option value="Medium-Light (ML)">Medium-Light (ML)</option>
                                <option value="Medium-Heavy (MH)">Medium-Heavy (MH)</option>                                
                                <option value="Heavy (H)">Heavy (H)</option>
                                <option value="Extra-Heavy (EH)">Extra-Heavy (EH)</option>
                                <option value="Ultra-Heavy (UH)">Ultra-Heavy (UH)</option>                                
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Line Weight (gram)</label>
                            <input class="form-control" name="rod_line" type="number" required="" value="{{$rods->rod_line}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="rod_brand" type="text" required="" value="{{$rods->rod_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="rod_price" type="number" required="" value="{{$rods->rod_price}}"><br> 
                        </div>

                         <div class="col-md-6">
                            <label>Image</label>
                            <input class="form-control" name="rod_image" type="file" required="" value="{{$rods->rod_image}}"><br> 
                        </div>

                    </div>
                </div>
                <form class="enter_form">
                    <input class="btn btn-primary btn-block" type="submit" value="submit">  
                    <input type="hidden" name="_method" value="PATCH" >
                </form>
            </form>        
        </div>
    </div>
</div>


@stop