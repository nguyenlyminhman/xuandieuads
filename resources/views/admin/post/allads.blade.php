@extends('admin.layout.index')
@section('content')
<!-- /.row -->
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Danh Sách Bài Viết</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesPost">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu Đề</th>
                            <th>Tóm Tắt</th>
                            <th>Hình</th>
                            <th>Mục Chính</th>
                            <th>Mục Phụ</th>
                            <th>Online</th>
                            <th>Nổi Bật</th>
                            <th>Tùy Chọn</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $pt)
                            <tr class="even gradeA">
                                <td>{{$pt->id}}</td>
                                <td>{{$pt->title}}</td>
                                <td><p>{{$pt->short_content}}</p></td>
                                <td>
                                    <img src="./public/upload/image/{{$pt->image}}" class="img-rounded" width="100px" height="75px" />
                                </td>
                                <td>{{$pt->subCategory->mainCategory->main_cate_name}}</td>
                                <td>{{$pt->subCategory->sub_cate_name}}</td>
                                <td>{{$pt->online == 0 ? 'Có' : 'Không'}}</td>
                                <td>{{$pt->high_light == 0 ? "Có" : "Không"}}</td>
                                <td>
                                {{--  <a href="admin/post/edit/[{{$pt->subCategory->mainCategory->id}}, {{$pt->id}}]" type="button" class="btn btn-warning">Sửa</a><br><br>  --}}
                                    <a href="admin/post/edit/{{$pt->id}}" type="button" class="btn btn-warning">Sửa</a><br><br>
                                    @if($pt->main_cate_status== 0)
                                        <a  href="admin/post/delete/{{$pt->id}}" type="button" class="btn btn-danger" 
                                            onclick='return confirm("Lưu Ý: Sau khi xóa dữ liệu liên quan cũng sẽ mất.\n           Có chắc muốn xóa dòng này?");'>
                                            Xóa
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
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
