@extends('admin.layout.index')
@section('content')
<!-- /.row -->
<br>
<div class="row">
    <div class="col-lg-12">
        <!--begin add and edit button-->
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addMenu">Thêm Hình Ảnh</button>
        </div>
        <!--end of add and edit button-->
        <!--begin notification errors-->
        <div class="col-lg-6">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif
            @if(session('notification'))
                <div class="alert alert-success">
                        {{session('notification')}} <br>
                </div>
            @endif
        </div>
        <!--end of notification errors-->
    </div>
    <div class="col-lg-12">
        <!--add new menu item-->
        <div id="addMenu" class="collapse col-lg-6">
            <br />
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    Thêm Thêm Ảnh
                </div>
                <form action="admin/image/get-all-image" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <br>
                    <div class="form-group">
                        <label for="email">Chọn Loại Ảnh</label>
                        <select name="fk_idcategoryimg"  class="form-control selectpicker" required>
                            @foreach($cimage as $cimg)
                                <option value="{{$cimg->id}}">{{$cimg->name}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="form-group">
                        <label for="email">Tiêu đề:</label>
                        <input type="text" class="form-control" name="img_title" placeHolder="Nhập tiêu đề hình ảnh" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Link-Liên Kết:</label>
                        <input type="text" class="form-control" name="link_to" placeHolder="Nhập tên menu phụ" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Hình Ảnh</label>
                        <input type="file" id="fileinput" name="imgfile" class="form-control"/>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Đặt Lại</button>
                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#addMenu">Ẩn Hộp Thoại</button>
                </form>
            </div>
        </div>
        <!--end add new menu item-->
    </div>
    <!--danh sach menu chinh-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3>Danh Sách Hình Ảnh</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hình Ảnh</th>
                                <th>Link-Liên Kết</th>
                                <th>Nhóm Ảnh</th>
                                <th>Click</th>
                                <th>Lần Cuối Cập Nhật</th>
                                <th>Lựa Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($image as $img)
                            <tr>
                                <td>{{$img->id}}</td>
                                <td>
                                    <p>{{$img->title}}</p>
                                    <img src="upload/image/{{$img->img_name}}" class="img-rounded" width="100px" height="75px" />
                                </td>
                                <td>{{substr($img->link_to, 0, 50)}}</td>
                                <td>{{$img->categoryImage->name}}</td>
                                <td>{{$img->click_counter}}</td>
                                <td>{{date("d/m/Y", strtotime($img->updated_at))}}</td>
                                <td>
                                <a href="admin/image/edit/{{$img->id}}" type="button" class="btn btn-warning">Chỉnh Sửa</a><br/><br/>
                                    
                                        <a  href="admin/image/delete/{{$img->id}}" type="button" class="btn btn-danger" 
                                            onclick='return confirm("Lưu ý: Sau khi xóa, tất cả bài viết liên quan cũng sẽ mất.\n           Có chắc muốn xóa chuyên mục này?");'>Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!--end-danh sach menu chinh-->
</div>
@endsection