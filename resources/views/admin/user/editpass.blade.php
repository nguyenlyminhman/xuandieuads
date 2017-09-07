@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Thay Đổi Mật Khẩu</h2>
            </header>
            {{--  notice errors  --}}
            <div class="col-lg-6">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br >
                        @endforeach
                    </div>
                @endif
                @if(session('notification'))
                    <div class="alert alert-success">
                            {{session('notification')}} <br>
                    </div>
                @endif
            </div>
            {{--  end of notice errors  --}}
            <div class="clearfix"> </div>
            <div class="panel-body">
                <div class="position-center col-lg-6">
                    <form action="admin/user/update-pass/{{$user->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                        <label for="email">Mật Khẩu Mới:</label>
                        <input type="password" class="form-control" id="password" name="password" placeHolder="Nhập mật khẩu" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Xác Nhận Mật Khẩu:</label>
                        <input type="password" class="form-control" id="confirm_password" name="repassword" placeHolder="Xác nhận mật khẩu" required />
                    </div>
                        <button type="submit" class="btn btn-default">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
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