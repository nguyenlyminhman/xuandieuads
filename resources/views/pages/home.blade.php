@extends('layout.index')
@section('title')
{{$title}}
@endsection
@section('content')
<!--begin-carousel-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 carousel_slide">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <?php $i=0 ?>
                    @foreach($crs_img as $mimg)
                            <li data-target="#myCarousel" data-slide-to="{{$i}}" {{ $i==0 ? 'class="active"': '' }}></li>
                            <?php $i++ ?>
                    @endforeach
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $i=0 ?>
                        @foreach($crs_img as $carousel)
                                <div class="{{$i==0 ? 'item active':'item'}}">
                                    <a target="_blank" href="{{$carousel->link_to}}">
                                        <img src="upload/image/{{$carousel->img_name}}" alt="Image" height="425px" width="800px">
                                    </a>
                                </div>
                                <?php $i++ ?>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- HOT TRONG NGAY -->
            <div class="col-sm-4 carousel_hot_news">
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width:90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width:90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width:90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width:90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width:90px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin HOT Trong Ngày Tin</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- HOT TRONG NGAY -->
        </div>
        <hr>
    </div>
    <!--end-carousel-->
    <!-- Begin-MyStore -->
    <div class="container text-center">
        <h3>Gian Hàng Của Tôi</h3>
        <br>
        <div class="row center">
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <a href="#" class="">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </a>
            </div>
            <div class="col-sm-1"></div>
            <!-- <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 6</p>
            </div> -->
        </div>
    </div>
    <br>
    <!--end MyStore -->
    <!--Begin-new-voucher-->
    <div class="container ">
        <div class="text-center">
            <h2>Khuyến Mãi Mới Cập Nhật</h2>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>10% </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a href="#">Mã giảm giá Lazada 7% cho chủ thẻ Standard Chartered</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : 30/07/2018</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                Giảm thêm 7% tối đa giảm 500k cho chủ thẻ Standard Chartered mỗi thứ Năm hàng tuần. Giảm thêm 7% tối đa giảm 500k cho chủ
                                thẻ Standard Chartered mỗi thứ Năm hàng tuần </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode">
                                    <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                    <span class="glyphicon glyphicon-thumbs-up"></span> 
                                </button>
                        </div>
                        <!-- Modal -->
                        <div id="myVCode" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Mã Giảm Giá Lazada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã giảm giá MGG48394 đã được copy. Click vào nút bên dưới để chuyển đến trang khuyến
                                            mãi...
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Chuyển đến trang khuyến mãi</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <button type="button" class="btn btn-warning">Xem Thêm</button>
                </div>

            </div>
            <!-- begin-tab-hightlight -->
            <div class="col-sm-4">
                <div class="tab tab-sale">
                    <button class="tabsale" onclick="openSale(event, 'Hot')" id="defaultSale"><h4>Hàng Hot</h4></button>
                    <button class="tabsale" onclick="openSale(event, 'Online')"><h4>Mua Online</h4></button>
                </div>
                <div id="Hot" class="tabsalecontent">
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày Khuyến Mãi Hot Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="Online" class="tabsalecontent">
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mua Online Trong Ngày Mua Online Trong Ngày Mua Online Trong Ngày</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-tab-hightlight -->
            <!--interesting-ads-->
            <div class="col-sm-4">
                <br>
                <div class="panel panel-danger ">
                    <div class="panel-heading panel-heading-interesting">
                        <h4>CÓ THỂ BẠN QUAN TÂM</h4>
                    </div>
                    <div class="interesting-ads">
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-interesting-ads-->
        </div>
    </div>
    <!--End new voucher-->
    <!-- Interesting-ads -->
    <div class="container text-center">
        <hr>
        <h3>Có Thể Bạn Quan Tâm</h3>
        <br>
        <div class="row center">
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá Tiki</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá Sendo</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá ADayRoi</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá MuaChung</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá Lazada</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Giảm Giá Lotte</p>
            </div>
        </div>
    </div>
    <!-- end-Interesting-ads -->
@endsection