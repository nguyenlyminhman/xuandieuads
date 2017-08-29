@extends('admin.layout.index')
@section('content')
<!-- /.row -->
<br>
<div class="row">
    <div class="col-lg-12">
        <!--begin add and edit button-->
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addMenu">Thêm Menu</button>
        </div>
        <!--end of add and edit button-->
        <!--begin notification errors-->
        <div class="col-lg-6">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif
            @if(session('notification'))
                <div class="alert alert-success">
                        {{session('notification')}} <br>
                </div>
            @endif
        </div>
        <!--end of notification errors-->
    </div>
    <div class="col-lg-12">
        <!--add new menu item-->
        <div id="addMenu" class="collapse col-lg-6">
            <br />
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    Thêm Menu Chính
                </div>
                <form action="admin/main-menu/get-main-menu-list" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label for="email">Tên Menu:</label>
                        <input type="text" class="form-control" name="main_cate_name" placeHolder="Nhập tên menu chính" required />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Đặt Lại</button>
                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#addMenu">Ẩn Hộp Thoại</button>
                </form>
            </div>
        </div>
        <!--end add new menu item-->
    </div>
    <!--danh sach menu chinh-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3>Danh Sách Menu Chính </h3>
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
                        @foreach($mainMenu as $menu)
                            <tr>
                                <td>{{$menu->id}}</td>
                                <td>{{$menu->main_cate_name}}</td>
                                <td>{{$menu->main_cate_seolink}}</td>
                                <td>{!!$menu->main_cate_status== 1 ? "<strong class='text-danger'> Bật </strong>" : "Tắt"!!}</td>
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