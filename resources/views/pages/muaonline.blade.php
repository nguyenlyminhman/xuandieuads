@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
            @foreach($online as $on)
                <div class="row">
                    <div class="col-sm-3">
                        <img src="upload/image/{{$on->image}}" height="125px" width="170px">
                    </div>
                    <div class="col-sm-9">
                        <div class="row voucher-title">
                            <p> <a href="chi-tiet-khuyen-mai/{{$on->id}}/{{$on->title_seolink}}.html">{{$on->title}}</a></p>
                        </div>
                        <div class="row voucher-content">
                        <p> <span class="text-primary text"><span class="glyphicon glyphicon-hand-right"></span></span>
                             {{$on->short_content}} </p>
                        </div>
                        <div class="row">
                            <a target="_blank" href="{{$on->link_to}}" type="button" class="btn btn-default">
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
                    {{$online->links()}}
                </div>
            {{--  end-phan-trang  --}}
        </div>

        @include('layout.menuphai')
        
    </div>
</div>
<!--End new voucher-->
@endsection