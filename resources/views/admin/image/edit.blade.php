@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Chỉnh Sửa Hình Ảnh</h2>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="admin/image/edit/{{$image->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <br>
                    <div class="form-group">
                        <label for="email">Chọn Loại Ảnh:</label>
                        <select name="fk_idcategoryimg"  class="form-control selectpicker" required>
                            @foreach($cimage as $cimg)
                                <option 
                                @if($image->fk_idCategoryImg == $cimg->id)
                                    {{"selected"}}
                                @endif
                                value="{{$cimg->id}}">{{$cimg->name}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="form-group">
                        <label for="email">Tiêu đề:</label>
                        <input type="text" class="form-control" name="img_title" placeHolder="Nhập tiêu đề hình ảnh" required value="{{$image->title}}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Link-Liên Kết:</label>
                        <input type="text" class="form-control" name="link_to" placeHolder="Nhập tên menu phụ" required value="{{$image->link_to}}"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Ảnh Hiện Tại:</label><br>
                        <img src="upload/image/{{$image->img_name}}" class="img-rounded" width="250px" height="175px" />
                        <br><label for="email">{{$image->img_name}}</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Chọn Ảnh Mới:</label>
                        <input type="file" id="fileinput" name="imgfile" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-default">Cập Nhật</button>
                    <a href="admin/image/get-all-image" type="submit" class="btn btn-default">Quay Lại</a>
                </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection