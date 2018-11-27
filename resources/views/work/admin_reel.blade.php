@extends('lib.master')
@section('title','รอกตกปลา')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">รอกตกปลา</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('reel.create')}}" class="btn btn-info" style="width: 90px;">เพิ่มสินค้า</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tr>
                                <th>ชื่อสินค้า</th>
                                <th>ขนาด</th>
                                <th>สี</th>
                                <th>ประเภท</th>
                                <th>ยี่ห้อ</th>
                                <th>รูปภาพ</th>
                                <th>ราคา</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                            <tbody>

                                @foreach($reels as $row)
                                <tr>
                                    <td>{{$row->reel_name}}</td>
                                    <td align="center">{{$row->reel_size}}</td>
                                    <td>{{$row->reel_color}}</td>
                                    <td>{{$row->reel_type}}</td>
                                    <td>{{$row->reel_brand}}</td>
                                    <td><a href="{{action('ReelController@show',$row->reel_id)}}" class="btn btn-primary">View img</a></td>
                                    <td>{{$row->reel_price}}</td>
                                    <td>
                                        <a href="{{action('ReelController@edit', $row->reel_id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" class="delete_form" action="{{action('ReelController@destroy',$row->reel_id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button  type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Remove?');">Delete</button>
                                        </form>
                                    </td>
                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@stop