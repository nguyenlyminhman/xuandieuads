<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Xuân Diệu Ads</title>
	<base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="admin_asset/vendor/login/login.css" rel="stylesheet">
</head>
<body>
<div class="container">
 <div class="row">
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<h2 class="form-signin-heading">Welcome to XuanDieuAds</h2>
		</div>
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

		<div class="panel panel-body">
			<form class="form-signin" action="admin/login" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="form-group">
					<label for="inputEmail" class="sr-only"></label>
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only"></label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			</form>
		</div>
	</div>
	</div>
</div> <!-- /container -->
    <!-- jQuery -->
    <script src="admin_asset/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
