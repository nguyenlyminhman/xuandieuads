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
                @foreach($hotpage as $ht)
                    <div class="col-sm-6" style="float: left">
                        <img src="upload/image/{{$ht->image}}" height="250px" width="350px">
                        <div class="text-center voucher-title">
                            <p> 
                                <a href="chi-tiet-khuyen-mai/{{$ht->id}}/{{$ht->title_seolink}}.html">
                                    {{$ht->title}}
                                </a>
                            </p>
                        </div>
                        <div class="row text-center">
                            <a target="_blank" href="{{$ht->link_to}}" type="button" class="btn btn-default">
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
                {{$hotpage->links()}}
            </div>
            {{--  end-phan-trang  --}}
        </div>

        @include('layout.menuphai')
        
    </div>
</div>
<!--End new voucher-->
@endsection