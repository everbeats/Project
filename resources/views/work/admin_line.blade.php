@extends('lib.master')
@section('title','สายตกปลา')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สายตกปลา</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('line.create')}}" class="btn btn-info" style="width: 90px;">เพิ่มสินค้า</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr> 
                            <th style="text-align: center;">ชื่อสินค้า</th>
                            <th style="text-align: center;">ขนาด(lb)</th>
                            <th style="text-align: center;">สี</th>
                            <th style="text-align: center;">ประเภท</th>
                            <th style="text-align: center;">ยี่ห้อ</th>
                            <th style="text-align: center;">รูปภาพ</th>
                            <th style="text-align: center;">ราคา</th>
                            <th style="text-align: center;">แก้ไข</th>
                            <th style="text-align: center;">ลบ</th>
                        </tr>
                        </thead>
                        <tbody>                        
                            @foreach($lines as $row)
                            <tr>
                                <td style="text-align: center;">{{$row->line_name}}</td>
                                <td style="text-align: center;">{{$row->line_size}}</td>
                                <td style="text-align: center;">{{$row->line_color}}</td>
                                <td style="text-align: center;">{{$row->line_type}}</td>
                                <td style="text-align: center;">{{$row->line_brand}}</td>
                                <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$row->line_id}}">Image</button>  
                                    <div class="modal fade" id="{{$row->line_id}}" role="dialog">
                                        <div class="modal-dialog">                                          
                                            <div class="modal-content">                                                    
                                                <div class="modal-header">                                                    
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">รูปภาพ</h4>
                                                </div>                                               
                                                <div class="modal-body">
                                                <img src="{{action('LineController@show',$row->line_id)}}" alt="" width="565">
                                                </div>
                                                <div class="modal-footer">                                                               
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">{{$row->line_price}}</td>
                                <td style="text-align: center;"><a href="{{action('LineController@edit', $row->line_id)}}" class="btn btn-primary">Edit</a></td>
                                <td style="text-align: center;">
                                    <form method="post" class="delete_form" action="{{action('LineController@destroy',$row->line_id)}}" >
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