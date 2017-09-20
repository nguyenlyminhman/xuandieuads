@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
            <div class=" row text-left">
                <div class="row">
                    <h3>{{$loaikhuyenmai->sub_cate_name}}</h3>
                    <h3>
                        <small class="text-muted">{{$loaikhuyenmai->description}}</small>
                    </h3>
                    <p></p>
                </div>
            </div>
            <hr>
            <?php $i = 0 ?>
            @foreach($tinkhuyenmai as $gg)
            <?php $i++; ?>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-primary text-center panel-main-discount ">
                            <div class="panel-heading text-uppercase panel-discount">Giảm
                            </div>
                            <div class="panel-body text-danger text-uppercase">
                                <h1>{{$gg->discount}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row voucher-title">
                            <p> <a >{{$gg->title}}</a></p>
                        </div>
                        <div class="row voucher-date"> <span class="text-primary text"> <span class="glyphicon glyphicon-calendar"></span> Thời hạn : {{date("d/m/Y", strtotime($gg->expired_at))}}</span>
                        </div>
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-comment"></span> Chú ý:</span>
                                {{$gg->short_content}} </p>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myVCode{{$i}}">
                                <span class="glyphicon glyphicon-hand-right"> </span> Lấy Mã Giảm Giá
                                <span class="glyphicon glyphicon-thumbs-up"></span> 
                            </button>
                        </div> 
                        <!-- Modal -->
                        <div id="myVCode{{$i}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{{$loaikhuyenmai->sub_cate_name}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Nhập mã coupon bên dưới để được giảm giá, vui lòng đọc kỹ quy định sử dụng. </p>
                                            <p><input type="text" value="{{$gg->discount_code}}" />  </p>
                                        <p>Click vào nút bên dưới để chuyển đến trang khuyến mãi...</p>
                                    </div>
                                    <div class="modal-footer"> 
                                        <a target="_blank" href="{{$gg->link_to}}" type="button" class="btn btn-success" onclick="return $('#myVCode{{$i}}').modal('hide');">
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
            @endforeach     
            {{--  phan-trang  --}}
                <div class="row text-center">
                    {{$tinkhuyenmai->links()}}
                </div>
            {{--  end-phan-trang  --}}
        </div>
    @include('layout.menuphai')
    </div>
</div>
<!--End new voucher-->
@endsection