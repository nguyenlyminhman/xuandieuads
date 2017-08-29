@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Chỉnh Sửa Loại Ảnh</h2>
            </header>
            {{--  notice errors  --}}
            <div class="col-lg-6">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br >
                        @endforeach
                    </div>
                @endif
                @if(session('notification'))
                    <div class="alert alert-success">
                            {{session('notification')}} <br>
                    </div>
                @endif
            </div>
            {{--  end of notice errors  --}}
            <div class="clearfix"> </div>
            <div class="panel-body">
                <div class="position-center col-lg-6">
                    <form action="admin/categoryimg/edit/{{$cimage->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="email">Tên Menu: </label>
                            <input type="text" class="form-control" name="img_cate_name" value="{{$cimage->name}}" />
                        </div>
                        
                        <button type="submit" class="btn btn-default">Cập Nhật</button>
                        <a href="admin/categoryimg/get-all-category-image" type="submit" class="btn btn-default">Quay Lại</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection