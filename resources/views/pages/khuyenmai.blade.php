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
                <div class="col-sm-12">
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
                    <div class="col-sm-3">
                        <img src="upload/image/{{$gg->image}}" height="125px" width="170px">
                    </div>
                    <div class="col-sm-9">
                        <div class="row voucher-title">
                            <p> <a href="chi-tiet-khuyen-mai/{{$gg->id}}/{{$gg->title_seolink}}.html">{{$gg->title}}</a></p>
                        </div>
                        {{--  <div class="row voucher-date"> 
                            <span class="text-primary text"> 
                                <span class="glyphicon glyphicon-calendar"></span> 
                                Thời hạn : {{date("d/m/Y", strtotime($gg->expired_at))}}
                            </span>
                        </div>  --}}
                        <div class="row voucher-content">
                            <p> <span class="text-primary text"><span class="glyphicon glyphicon-hand-right"></span></span>
                                {{$gg->short_content}} </p>
                        </div>
                        <div class="row">
                            <a target="_blank" href="{{$gg->link_to}}" type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-hand-right"> </span>
                                    Xem trang khuyến mãi
                                <span class="glyphicon glyphicon-hand-right"> </span>
                            </a>
                        </div> 
                    </div>
                </div>
                <hr>
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