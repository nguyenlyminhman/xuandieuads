@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Chỉnh Sửa Menu Chính</h2>
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
                    <form action="admin/main-menu/edit/{{$menu->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="email">Tên Menu: </label>
                            <input type="text" class="form-control" name="main_cate_name" value="{{$menu->main_cate_name}}" />
                        </div>
                        <div class="form-group">
                            <label for="email">Trạng Thái:</label><br>
                            @if($menu->main_cate_status == 1 )
                                {!!    
                                    '<label class="radio-inline"><input value="1" type="radio" name="status" checked>Bật</label>
                                    <label class="radio-inline"><input value="0" type="radio" name="status">Tắt</label>'
                                !!}
                            @else
                                {!!
                                    '<label class="radio-inline"><input value="1" type="radio" name="status" >Bật</label>
                                    <label class="radio-inline"><input value="0" type="radio" name="status" checked>Tắt</label>'
                                !!}
                            @endif
                        </div>
                        <button type="submit" class="btn btn-default">Cập Nhật</button>
                        <a href="admin/main-menu/get-main-menu-list" type="submit" class="btn btn-default">Quay Lại</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection