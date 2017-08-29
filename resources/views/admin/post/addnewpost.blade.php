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
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Link-Liên Kết:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="link-liên kết">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt</label>
                            <textarea type="text" row="9" class="form-control" placeholder="Nội dung tóm tắt"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Đầy Đủ</label>
                            <textarea type="text" row="8" class="form-control ckeditor" id="demo" placeholder="Nội dung đầy đủ"></textarea>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label> <br>
                            <label class="radio-inline"><input value="1" type="radio" name="status" checked>Có</label>
                            <label class="radio-inline"><input value="0" type="radio" name="status">Không</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Bài Viết</label>
                            <input type="file" id="exampleInputFile" class="form-control">
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