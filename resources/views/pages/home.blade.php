@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
@include('layout.bigsale')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
            @foreach($khuyenmai as $home)
                <div class="row">
                    <div class="col-sm-3">
                        <img src="upload/image/{{$home->image}}" height="125px" width="170px">
                    </div>
                    <div class="col-sm-9">
                        <div class="row voucher-title">
                            <p><a href="chi-tiet-khuyen-mai/{{$home->id}}/{{$home->title_seolink}}.html">{{$home->title}}</a></p>
                        </div>
                        <div class="row voucher-content">
                            <p><span class="text-primary text"><span class="glyphicon glyphicon-hand-right"></span></span>
                                {{$home->short_content}} 
                            </p>
                        </div>
                        <div class="row">
                            <a target="_blank" href="chi-tiet-khuyen-mai/{{$home->id}}/{{$home->title_seolink}}.html" type="button" class="btn btn-default">
                                Xem thêm
                            </a>
                        </div> 
                    </div>
                </div>
                <hr>    
            @endforeach
            {{--  phan-trang  --}}
            <div class="row text-center">
                 {{$khuyenmai->links()}}
            </div>
            {{--  end-phan-trang  --}}
        </div>
        <div class="col-sm-4">
            @include('layout.menuphai')
        </div>
    </div>
</div>
<!--End new voucher-->
@endsection
