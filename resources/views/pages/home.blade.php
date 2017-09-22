@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-2">
                    <div class="panel panel-primary text-center panel-main-discount ">
                        <div class="panel-heading text-uppercase panel-discount">Giảm
                        </div>
                        <div class="panel-body text-danger text-uppercase">
                            <h1>8K</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="row voucher-title">
                        <p> <a >Title</a></p>
                    </div>
                    <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : </span>
                    </div>
                    <div class="row voucher-content">
                        <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                            Short content </p>
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
                                    <h4 class="modal-title">lazada</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Nhập mã coupon bên dưới để được giảm giá, vui lòng đọc kỹ quy định sử dụng. </p>
                                        <p><input type="text" value="" />  </p>
                                    <p>Click vào nút bên dưới để chuyển đến trang khuyến mãi...</p>
                                </div>
                                <div class="modal-footer"> 
                                    <a target="_blank" href="" type="button" class="btn btn-success" onclick="return $('#myVCode').modal('hide');">
                                        <span class="glyphicon glyphicon-hand-right"> </span>
                                            Chuyển đến trang khuyến mãi
                                        <span class="glyphicon glyphicon-hand-right"> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <img src="upload/image/" height="125px" width="170px">
                </div>
                <div class="col-sm-9">
                    <div class="row voucher-title">
                        <p> <a href=""></a></p>
                    </div>
                    <div class="row voucher-content">
                        <p> noi dung ngan </p>
                    </div>
                    <div class="row">
                        <a target="_blank" href="" type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-hand-right"> </span>
                                Xem trang khuyến mãi
                            <span class="glyphicon glyphicon-hand-right"> </span>
                        </a>
                    </div> 
                </div>
            </div>
            <hr>
            {{--  phan-trang  --}}
            <div class="row text-center">
                {{--  {{$tinkhuyenmai->links()}}  --}}
            </div>
            {{--  end-phan-trang  --}}
        </div>
    @include('layout.menuphai')
    </div>
</div>
<!--End new voucher-->
@endsection