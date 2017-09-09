@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
        
            <header class="panel-heading">
            @if($post->subCategory->mainCategory->id==2)
                <h2>Chỉnh Sửa Mã Giảm Giá</h2>
            @else
                <h2>Chỉnh Sửa Bài Viết</h2>
            @endif
            </header>
        
            <div class="panel-body">

                <div class="position-center">
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
                <div class="position-center">
                @if($post->subCategory->mainCategory->id==2)
                {{--  form edit discount code  --}}
                    <form role="form" action="admin/post/edit-discount/{{$post->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Phụ:</label>
                            <select name="subcategory" id="subcategory" class="form-control selectpicker" required>
                               @foreach($submenu as $smenu)
                                    <option 
                                    @if( $post->fk_idSubCategory == $smenu->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$smenu->id}}">{{$smenu->sub_cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề:</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề" value="{{$post->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Link-Liên Kết:</label>
                            <input type="text" class="form-control" name="link_to" placeholder="link-liên kết" value="{{$post->link_to}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số Lượng Giảm Giá:</label>
                            <input type="text" class="form-control" name="discount" value="{{$post->discount}}"placeholder="Giảm giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã Giảm Giá:</label>
                            <input type="text" class="form-control" name="discount_code" value="{{$post->discount_code}}"placeholder="Mã giảm giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thời Hạn:</label>
                            <input type="text" class="form-control" id='example1' name="expired_date" value="{{date("Y-m-d", strtotime($post->expired_at))}}" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt:</label>
                            <textarea type="text" row="9" name="short_content" class="form-control" placeholder="Nội dung tóm tắt" required>{{$post->short_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($post->high_light == 0)
                                <label class="radio-inline"><input value="0" type="radio" name="hlight" checked>Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="hlight" >Không</label>
                            @else
                                <label class="radio-inline"><input value="0" type="radio" name="hlight" >Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="hlight" checked>Không</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mua Online:</label>  &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($post->online == 0)
                                <label class="radio-inline"><input value="0" type="radio" name="online" checked>Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="online" >Không</label>
                            @else
                                <label class="radio-inline"><input value="0" type="radio" name="online" >Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="online" checked>Không</label>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Cập Nhật</button>
                            <button type="reset" class="btn btn-default">Đặt Lại</button>
                            <a href="admin/post/get-all-post" class="btn btn-default">Quay Lại</a>
                        </div>
                    </form>
                {{--  end form edit discount code  --}}
                @else
                {{--  form edit edit ads  --}}
                    <form role="form" action="admin/post/edit-ads/{{$post->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Phụ:</label>
                            <select name="subcategory" id="subcategory" class="form-control selectpicker" required>
                               @foreach($submenu as $smenu)
                                    <option 
                                    @if( $post->fk_idSubCategory == $smenu->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$smenu->id}}">{{$smenu->sub_cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề:</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề" value="{{$post->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt:</label>
                            <textarea type="text" row="9" name="short_content" class="form-control" placeholder="Nội dung tóm tắt" required>{{$post->short_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Đầy Đủ:</label>
                            <textarea type="text" row="8" class="form-control ckeditor" name="full_content" placeholder="Nội dung đầy đủ">{{$post->full_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($post->high_light == 0)
                                <label class="radio-inline"><input value="0" type="radio" name="hlight" checked>Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="hlight" >Không</label>
                            @else
                                <label class="radio-inline"><input value="0" type="radio" name="hlight" >Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="hlight" checked>Không</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mua Online:</label>  &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($post->online == 0)
                                <label class="radio-inline"><input value="0" type="radio" name="online" checked>Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="online" >Không</label>
                            @else
                                <label class="radio-inline"><input value="0" type="radio" name="online" >Có</label>
                                <label class="radio-inline"><input value="1" type="radio" name="online" checked>Không</label>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="email">Ảnh Hiện Tại:</label><br>
                        <img src="upload/image/{{$post->image}}" class="img-rounded" width="250px" height="175px" />
                        <br><label for="email">{{$post->image}}</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Chọn Ảnh Mới:</label>
                        <input type="file" id="fileinput" name="imgfile" class="form-control"/>
                    </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Đặt Lại</button>
                            <a href="admin/post/get-all-post" class="btn btn-default">Quay Lại</a>
                        </div>
                    </form>
                {{--  end form edit ads --}}
                @endif
                </div>
            </div>
         </section>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#maincategory").change(function(){
                var idmaincategory = $(this).val()
                $.get("admin/ajax/subcategory/"+idmaincategory, function(data){
                    $("#subcategory").html(data);
                });
            });
        });
    </script>
@endsection