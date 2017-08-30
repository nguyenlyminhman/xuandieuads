<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
	<base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Date Picker -->
    <link href="admin_asset/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="admin_asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admin_asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<!-- begin header -->
			@include('admin.layout.header')
			<!-- end header -->
			<!-- navbar-static-side -->
            @include('admin.layout.menu')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin_asset/vendor/raphael/raphael.min.js"></script>
    <script src="admin_asset/vendor/morrisjs/morris.min.js"></script>
    <script src="admin_asset/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- DataTables JavaScript -->
    <script src="admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="admin_asset/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!--using for ck editor-->
    <script type="text/javascript" src="admin_asset/ckeditor/ckeditor.js"></script>
    <!--using for datepicker-->
    <script src="admin_asset/vendor/datepicker/js/bootstrap-datepicker.js"></script>
    
    <!--Confirmation JavaScripts--> 
    <script>
        $(document).ready(function() {
            
            $('#dataTables-example').DataTable({
                responsive: true
            });
            
            $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });
            
        });
    </script>
    @yield('script')
</body>

</html>