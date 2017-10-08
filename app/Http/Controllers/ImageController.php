<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\CategoryImage;

class ImageController extends Controller
{
    //
    public function getAllImage(){
        $image = Image::all();
        $cimage = CategoryImage::all();
        return view('admin.image.allimage',['image'=>$image, 'cimage'=>$cimage]);
    }
    public function postImage(Request $request){
        $image = new Image;
        $this->validate($request,
        [
            'link_to'=>'required|min:5|max:250',
            'img_title'=>'required|min:5|max:100'
        ],
        [
            'link_to.required'=>'Hãy nhập link liên kết.',
            'link_to.min'=>'Link liên kết từ 5 đến 250 kí tự',
            'link_to.max'=>'Link liên kết từ 5 đến 250 kí tự',
            'img_title.required'=>'Hãy nhập tiêu đề hình ảnh.',
            'img_title.min'=>'Tiêu đề từ 5 đến 100 kí tự.',
            'img_title.max'=>'Tiêu đề từ 5 đến 100 kí tự.'
        ]);
        if($request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $tail = $file->getClientOriginalExtension();
            if($tail != 'png' && $tail != 'jpg' && $tail != 'jpeg'){
                return redirect("admin/image/get-all-image")->with('notification','Sai định dạng ảnh. Chỉ cho phép ảnh có đuôi png, jpg, jpeg.');
            }
            $name = $file -> getClientOriginalName();
            $img_name = str_random(5)."_".$name;
            while(file_exists("public/upload/image/".$img_name)){
                $img_name = str_random(8)."_".$name;
            }
            $file->move("public/upload/image",$img_name);
            $image->img_name = $img_name;
        }else{
            $image->img_name = "default.jpg";
        }
        $image->link_to = $request->link_to;
        $image->title = $request->img_title;
        $image->click_counter = "1";
        $image->created_at = date("Y-m-d");
        $image->updated_at = date("Y-m-d");
        $image->fk_idCategoryImg = $request->fk_idcategoryimg;
        $image->save();
        return redirect("admin/image/get-all-image")->with('notification','Đã thêm thành công');
    }

    public function editImage($id){
        
        $cimage = CategoryImage::all();
        $image = Image::find($id);
        return view('admin.image.edit',['image'=>$image, 'cimage'=>$cimage]);
    }
    public function updateImage(Request $request, $id){
        $image = Image::find($id);
        $this->validate($request,
        [
            'link_to'=>'required|min:5|max:250',
            'img_title'=>'required|min:5|max:100'
        ],
        [
            'link_to.required'=>'Hãy nhập link liên kết.',
            'link_to.min'=>'Link liên kết từ 5 đến 250 kí tự',
            'link_to.max'=>'Link liên kết từ 5 đến 250 kí tự',
            'img_title.required'=>'Hãy nhập tiêu đề hình ảnh.',
            'img_title.min'=>'Tiêu đề từ 5 đến 100 kí tự.',
            'img_title.max'=>'Tiêu đề từ 5 đến 100 kí tự.'
        ]);
        if($request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $tail = $file->getClientOriginalExtension();
            if($tail != 'png' && $tail != 'jpg' && $tail != 'jjpeg'){
                return redirect("admin/image/edit/".$id)->with('notification','Sai định dạng ảnh. Chỉ cho phép ảnh có đuôi png, jpg, jpeg.');
            }
            $name = $file -> getClientOriginalName();
            $img_name = str_random(5)."_".$name;
            while(file_exists("upload/image/".$img_name)){
                $img_name = str_random(8)."_".$name;
            }
            $file->move("public/upload/image",$img_name);
            unlink("public/upload/image/".$image->img_name);
            $image->img_name = $img_name;
        }
        $image->link_to = $request->link_to;
        $image->title = $request->img_title;
        $image->created_at = date("Y-m-d");
        $image->updated_at = date("Y-m-d");
        $image->fk_idCategoryImg = $request->fk_idcategoryimg;
        $image->save();
        return redirect("admin/image/edit/".$id)->with('notification','Đã cập nhật thành công');
    }

    public function deleteImage($id){
        $image = Image::find($id);
        unlink("upload/image/".$image->img_name);
        $image->delete();
        return redirect("admin/image/get-all-image")->with('notification','Đã xóa thành công !!!');;
    }
}
