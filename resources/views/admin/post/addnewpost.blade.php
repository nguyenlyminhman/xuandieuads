@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Thêm Bài Mới</h2>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="admin/post/add-new-post" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Chính:</label>
                            <select name="maincategory" id="maincategory" class="form-control selectpicker">
                            <option value="">--Chọn Chuyên Mục Chính--</option>
                            @foreach($mainmenu as $mmenu)
                                <option value="{{$mmenu->id}}">{{$mmenu->main_cate_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Phụ:</label>
                            <select name="subcategory" id="subcategory" class="form-control selectpicker">
                                {{--  @foreach($submenu as $smenu)
                                    <option value="{{$smenu->id}}">{{$smenu->sub_cate_name}}</option>
                                @endforeach  --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề:</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Link-Liên Kết:</label>
                            <input type="text" class="form-control" name="link_to" placeholder="link-liên kết" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm Giá:</label>
                            <input type="number" class="form-control" name="discount" placeholder="10" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã Giảm Giá:</label>
                            <input type="text" class="form-control" name="discount_code" placeholder="Mã giảm giá" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thời Hạn:</label>
                            <input type="text" class="form-control" id='example1' name="expired_date" placeholder="dd/mm/yyyy" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt:</label>
                            <textarea type="text" row="9" name="short_content" class="form-control" placeholder="Nội dung tóm tắt" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Đầy Đủ:</label>
                            <textarea type="text" row="8" class="form-control ckeditor" name="full_content" placeholder="Nội dung đầy đủ" required></textarea>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label> <br>
                            <label class="radio-inline"><input value="1" type="radio" name="hlight" >Có</label>
                            <label class="radio-inline"><input value="0" type="radio" name="hlight" checked>Không</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Bài Viết:</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <br> <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Đặt Lại</button>
                        </form>
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