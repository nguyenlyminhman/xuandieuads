@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Thêm Thông Tin Khuyến Mãi Mới</h2>
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
                    <form role="form" action="admin/post/add-new-ads" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        {{--  <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Chính:</label>
                            <select name="maincategory" id="maincategory" class="form-control selectpicker">
                            <option value="">--Chọn Chuyên Mục Chính--</option>
                            @foreach($mainmenu as $mmenu)
                                <option value="{{$mmenu->id}}">{{$mmenu->main_cate_name}}</option>
                            @endforeach
                            </select>
                        </div>  --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục:</label>
                            <select name="subcategory" id="subcategory" class="form-control selectpicker" required>
                                <option value="">--Chọn Chuyên Mục--</option>
                                @foreach($submenu as $smenu)
                                    <option value="{{$smenu->id}}">{{$smenu->sub_cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề:</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Tiêu đề" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt:</label>
                            <textarea type="text" row="9" name="short_content" class="form-control" placeholder="Nội dung tóm tắt" required>{{ old('short_content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Link-Liên Kết:</label>
                            <input type="text" class="form-control" name="link_to" value="{{ old('link_to') }}" placeholder="link-liên kết" required>
                        </div>
                        {{--  <div class="form-group">
                            <label for="exampleInputPassword1">Thời Hạn:</label>
                            <input type="text" class="form-control" id='example1' name="expired_date" value="{{ old('expired_date') }}" placeholder="yyyy-mm-dd">
                        </div>  --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Đầy Đủ:</label>
                            <textarea type="text" row="8" class="form-control ckeditor" name="full_content" placeholder="Nội dung đầy đủ">{{ old('full_content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label>  &nbsp;&nbsp;&nbsp;&nbsp; 
                            <label class="radio-inline"><input value="0" type="radio" name="hlight" >Có</label>
                            <label class="radio-inline"><input value="1" type="radio" name="hlight" checked>Không</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Xuất Hiện Mua Online:</label>  &nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="radio-inline"><input value="0" type="radio" name="online" >Có</label>
                            <label class="radio-inline"><input value="1" type="radio" name="online" checked>Không</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Bài Viết:</label>
                            <input type="file" name="imgfile" class="form-control">
                        </div>
                        <br> <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Đặt Lại</button>
                        </div>
                    </form>
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
