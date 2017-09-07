<!-- navbar-header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="admin/dashboard">Xuân Diệu Offers</a>
</div>
<!-- /.navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right"> Hello, {{ Auth::user()->name }}
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> 
        </a>
        <ul class="dropdown-menu dropdown-user"> 
            <li><a href="admin/user/update-info/{{Auth::user()->id}}"><i class="fa fa-user fa-fw"></i>Cập Nhật Thông Tin</a>
            </li>
            <li><a href="admin/user/update-pass/{{Auth::user()->id}}"><i class="glyphicon glyphicon-asterisk"></i>Đổi Mật Khẩu</a>
            </li>
            <li class="divider"></li>
            <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Thoát </a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->