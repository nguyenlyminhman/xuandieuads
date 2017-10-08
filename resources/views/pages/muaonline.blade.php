@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
        <?php $i = 0 ?>
            <div class="row">
                @foreach($online as $on)
                    <div class="col-sm-6" style="float: left">
                        <img src="public/upload/image/{{$on->image}}" height="250px" width="350px">
                        <div class="text-center voucher-title">
                            <p> 
                                <a href="chi-tiet-khuyen-mai/{{$on->id}}/{{$on->title_seolink}}.html">
                                    {{$on->title}}
                                </a>
                            </p>
                        </div>
                        <div class="row text-center">
                            <a target="_blank" href="{{$on->link_to}}" type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-hand-right"> </span>
                                    Xem thêm
                                <span class="glyphicon glyphicon-hand-right"> </span>
                            </a>
                        </div>
                    </div>
                    <?php $i++; ?>
                    @if($i%2==0)
                        </div><br><div class="row">
                    @endif
                @endforeach  
            </div>
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