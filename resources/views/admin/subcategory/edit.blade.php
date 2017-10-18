@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Chỉnh Sửa Menu Phụ</h2>
            </header>
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
            <div class="clearfix"> </div>
            <div class="panel-body">
                <div class="position-center col-lg-6">
                    <form role="form" action="admin/sub-menu/edit/{{$subMenu->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Menu chính</label>
                            <select name="idmaincategory"  class="form-control selectpicker" required>
                                @foreach($mainMenu as $mmenu)
                                    <option 
                                    @if( $subMenu->fk_idMainCategory == $mmenu->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$mmenu->id}}">{{$mmenu->main_cate_name}}</option>
                                @endforeach
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên menu phụ:</label>
                            <input type="text" class="form-control" name="sub_cate_name" placeholder="Tên menu phụ" value="{{$subMenu->sub_cate_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Miêu Tả:</label>
                            <textarea type="text" class="form-control" name="description"> {{$subMenu->description}} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Trạng Thái:</label><br>
                            @if($subMenu->sub_cate_status == 1 )
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
                        <a href="admin/sub-menu/get-sub-menu-list" type="submit" class="btn btn-default">Quay Lại</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection