@extends('admin.layout.index')
@section('content')
<!-- /.row -->
<br>
<div class="row">
    <div class="col-lg-12">
        <!--begin add and edit button-->
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addMenu">Thêm Người Dùng</button>
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
                    Thêm Người Dùng
                </div>
                <form action="admin/user/get-all-user" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label for="email">Tên:</label>
                        <input type="text" class="form-control" name="name" placeHolder="Nhập tên người dùng" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeHolder="qwerty@asd.vn" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Mật Khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password" placeHolder="Nhập mật khẩu" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Xác Nhận Mật Khẩu:</label>
                        <input type="password" class="form-control" id="confirm_password" name="repassword" placeHolder="Xác nhận mật khẩu" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Quyền:</label><br>
                        <label class="radio-inline"><input value="0" type="radio" name="level" >Admin</label>
                        <label class="radio-inline"><input value="1" type="radio" name="level" checked>Thường</label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Đặt Lại</button>
                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#addMenu">Ẩn Hộp Thoại</button>
                </form>
                <br>
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
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Quyền</th>
                                <th>Email</th>
                                <th>Ngày Tạo</th>
                                <th>Lần Cập Nhật Cuối</th>
                                <th>Lựa Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $ur)
                            <tr>
                                <td>{{$ur->id}}</td>
                                <td>{{$ur->name}}</td>
                                <td>{{$ur->level==0 ? "Admin":"Thường"}}</td>
                                <td>{{$ur->email}}</td>
                                <td>{{date("d/m/Y", strtotime($ur->created_at))}}</td>
                                <td>{{date("d/m/Y", strtotime($ur->updated_at))}}</td>
                                <td>
                                    <a href="admin/user/edit/{{$ur->id}}" type="button" class="btn btn-warning">Sửa</a>
                                    <a  href="admin/user/delete/{{$ur->id}}" type="button" class="btn btn-danger" 
                                        onclick='return confirm("Lưu Ý: Sau khi xóa dữ liệu liên quan cũng sẽ mất.\n           Có chắc muốn xóa dòng này?");'>
                                        Xóa
                                    </a>
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
@section('script')
<script>
    var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords không trùng.");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
@endsection