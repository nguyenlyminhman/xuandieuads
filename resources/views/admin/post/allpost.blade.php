@extends('admin.layout.index')
@section('content')
<!-- /.row -->
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3>Danh Sách Bài Viết</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên Menu</th>
                                <th>Tên Không Dấu</th>
                                <th>Trạng Thái</th>
                                <th>Ngày Tạo</th>
                                <th>Lần Cuối Cập Nhật</th>
                                <th>Lựa Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{--  @foreach($post as $pt)
                            <tr>
                                <td>{{$pt->id}}</td>
                                <td>
                                    {{$pt->title}}
                                    <p>{{$pt->image}} </p>
                                </td>
                                <td>{{}}</td>

                                <td>{{date("d/m/Y", strtotime($menu->created_at))}}</td>
                                <td>{{date("d/m/Y", strtotime($menu->updated_at))}}</td>
                                <td>
                                <a href="admin/main-menu/edit/{{$menu->id}}" type="button" class="btn btn-warning">Chỉnh Sửa</a>
                                    @if($menu->main_cate_status== 0)
                                        <a  href="admin/main-menu/delete/{{$menu->id}}" type="button" class="btn btn-danger" 
                                            onclick='return confirm("Lưu Ý: Sau khi xóa dữ liệu liên quan cũng sẽ mất.\n           Có chắc muốn xóa dòng này?");'>
                                            Xóa
                                        </a>
                                    
                                    @endif
                                </td>
                            </tr>
                            @endforeach  --}}
                        </tbody>
                    </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!--end-danh sach menu chinh-->
</div>
@endsection