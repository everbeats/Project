@extends('lib.master')
@section('title','คันเบ็ด')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">คันเบ็ด</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('rod.create')}}" class="btn btn-info" style="width: 90px;">เพิ่มสินค้า</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                 <th>ชื่อสินค้า</th>
                                 <th>ขนาด(ฟุต)</th>
                                 <th>สี</th>
                                 <th>Power</th>
                                 <th>Line(g)</th>
                                 <th>ประเภท</th>
                                 <th>ยี่ห้อ</th>
                                 <th>รูปภาพ</th>
                                 <th>ราคา</th>
                                 <th>แก้ไข</th>
                                 <th>ลบ</th>
                            </tr>
                            <tbody>
                         
                                @foreach($rods as $row) 
                                <tr>
                                    <td>{{$row->rod_name}}</td>
                                    <td align="center">{{$row->rod_length}}</td>
                                    <td>{{$row->rod_color}}</td>
                                    <td>{{$row->rod_power}}</td>
                                    <td align="center">{{$row->rod_line}}</td>
                                    <td>{{$row->rod_type}}</td>
                                    <td>{{$row->rod_brand}}</td>
                                    <td><a href="{{action('RodController@show',$row->rod_id)}}" class="btn btn-primary">View img</a></td>
                                    <td>{{$row->rod_price}}</td>
                                    <td>
                                        <a href="{{action('RodController@edit', $row->rod_id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" class="delete_form" action="{{action('RodController@destroy',$row->rod_id)}}" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button  type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Remove?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@stop