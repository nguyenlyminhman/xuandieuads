
@extends('layout.index')
@section('title')
    {{$title}}
@endsection
@section('content')
<!--Begin-new-voucher-->
<div class="container ">
    <div class="row">
        <div class="col-sm-8">
           <p> 
           {!!
            $chitietkhuyenmai->full_content
           !!}
           </p>
           @include('pages.quantam')
        </div>
        @include('layout.menuphai')
    </div>
</div>
<!--End new voucher-->
@endsection