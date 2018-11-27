@extends('lib.master2')
@section('title','เพิ่มสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">เพิ่มสินค้า (ตะขอเบ็ด)</h5>
        <div class="card-body">
            <form action="{{url('admin/hook')}}" method="post"  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="hook_name" type="text" required=""><br>              
                        </div>

                        <div class="col-md-6">
                          <label>Size</label>
                          <input class="form-control" name="hook_size" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <select class="form-control" name="hook_color" type="text">
                                <option value=""></option>
                                <option value="Black">Black</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="hook_type" type="text">
                                <option value=""></option>
                                <option value="Single Hook">Single Hook</option>
                                <option value="Double Hook">Double Hook</option>
                                <option value="Triple Hook">Triple Hook</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="hook_brand" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="hook_price" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input class="form-control" name="hook_image" type="file" required=""><br> 
                        </div>
     
                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="submit">
                <a href="{{route('hook.index')}}" class="btn btn-info btn-block">กลับสู่หน้าหลัก</a>
            </form>        
        </div>
    </div>
</div>
@stop