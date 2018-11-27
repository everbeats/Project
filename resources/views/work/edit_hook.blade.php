@extends('lib.master2')
@section('title','แก้ไขสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (ตะขอเบ็ด)</h5>
        <div class="card-body">
            <form action="{{action('HookController@update',$id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="hook_name" type="text" required="" value="{{$hooks->hook_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="hook_size" type="number" required="" value="{{$hooks->hook_size}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <select class="form-control" name="hook_color" type="text">
                                <option value="{{$hooks->hook_color}}">{{$hooks->hook_color}}</option>
                                <option value="Black">Black</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="hook_type" type="text">
                                <option value="{{$hooks->hook_type}}">{{$hooks->hook_type}}</option>
                                <option value="Single Hook">Single Hook</option>
                                <option value="Double Hook">Double Hook</option>
                                <option value="Triple Hook">Triple Hook</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="hook_brand" type="text" required="" value="{{$hooks->hook_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="hook_price" type="number" required="" value="{{$hooks->hook_price}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input class="form-control" name="hook_image" type="file" required="" value="{{$hooks->hook_image}}"><br> 
                        </div>

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="submit"> 
                <input type="hidden" name="_method" value="PATCH" > 
            </form>        
            
        </div>
    </div>
</div>
@stop