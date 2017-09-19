<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<!-- saved from url=(0060)https://getbootstrap.com/docs/3.3/examples/navbar-fixed-top/ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">
    <title>Xuan Dieu | @yield('title') </title>
    <base href="{{asset('')}}" >
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/xuandieu_ads.style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <!-- begin-navigation -->
    @include('layout.header')
    <!-- end-navigation -->
    <!--carousel-->
    @include('layout.carousel')
    <!--end-carousel-->
    <!--begin-content-->
    @yield('content');
    <!--end-content-->
    <!-- begin-footer -->
    @include('layout.footer');
    <!-- end-footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/xuandieu_ads.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    @yield('script')
</body>
</html>