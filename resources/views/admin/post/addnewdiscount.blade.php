@extends('admin.layout.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2>Thêm Mã Giảm Giá</h2>
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
                    <form role="form" action="admin/post/add-new-discount-code" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Chính:</label>
                            <select name="maincategory" id="maincategory" class="form-control selectpicker" data-style="btn-primary">
                            <option value="">--Chọn Chuyên Mục Chính--</option>
                            @foreach($mainmenu as $mmenu)
                                <option value="{{$mmenu->id}}">{{$mmenu->main_cate_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chuyên Mục Phụ:</label>
                            <select name="subcategory" id="subcategory" class="form-control selectpicker" required>
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
                            <label for="exampleInputEmail1">Số Lượng Giảm Giá:</label>
                            <input type="text" class="form-control" name="discount" placeholder="Giảm giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã Giảm Giá:</label>
                            <input type="text" class="form-control" name="discount_code" placeholder="Mã giảm giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thời Hạn:</label>
                            <input type="text" class="form-control" id='example1' name="expired_date" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Tóm Tắt:</label>
                            <textarea type="text" row="9" name="short_content" class="form-control" placeholder="Nội dung tóm tắt" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tin Nổi Bật:</label> <br>
                            <label class="radio-inline"><input value="1" type="radio" name="hlight" >Có</label>
                            <label class="radio-inline"><input value="0" type="radio" name="hlight" checked>Không</label>
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