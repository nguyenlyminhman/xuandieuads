<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryImage;

class CategoryImageController extends Controller
{
    //
    public function getCategoryImgList (){
        $cimage= CategoryImage::all();
        return view('admin.categoryimg.allcategoryimg', ['cimage'=>$cimage]);
    }
    //add more menu name
    public function postCategoryImg(Request $request){
        $this->validate($request,
        [
            'img_cate_name'=>'required|unique:category_img,name|min:3|max:100'
        ],
        [
            'img_cate_name.required'=>'Chưa nhập loại ảnh !',
            'img_cate_name.unique'=>'Mục này đã tồn tại. Hãy chọn tên khác.',
            'img_cate_name.min'=>'Tên loại ảnh có độ dài từ 3 đến 100 kí tự.',
            'img_cate_name.max'=>'Tên loại ảnh có độ dài từ 3 đến 100 kí tự.'
        ]);
        $menu = new CategoryImage;
        $menu->name = $request->img_cate_name;
        $menu->created_at =  date("Y-m-d");
        $menu->updated_at =  date("Y-m-d");
        $menu->fk_idManager = 1;  
        $menu->save();
        return redirect('admin/categoryimg/get-all-category-image')->with('notification','Thêm thành công !!!');
    }
    //
    public function editCategoryImg ($id){
        $cimage = CategoryImage::find($id);
        return view('admin.categoryimg.edit', ['cimage'=>$cimage]);        
    }
    //
    public function updateCategoryImg (Request $request, $id){
        $cimage = CategoryImage::find($id);

        $this->validate($request,
        [
            'img_cate_name'=>'required|min:3|max:100'
        ],
        [
            'img_cate_name.required'=>'Chưa nhập tên Loại Ảnh.',
            'img_cate_name.min'=>'Tên Loại Ảnh có độ dài từ 3 đến 100 kí tự.',
            'img_cate_name.max'=>'Tên Loại Ảnh có độ dài từ 3 đến 100 kí tự.'
        ]);
        $cimage->name = $request->img_cate_name;
        $cimage->updated_at =  date("Y-m-d");
        $cimage->save();
        return redirect('admin/categoryimg/edit/'.$id)->with('notification','Đã cập nhật thành công.');
    }
   
   
    //
    public function deleteCategoryImg($id){
        $cimage = CategoryImage::find($id);
        $cimage->delete();
        return redirect('admin/categoryimg/get-all-category-image')->with('notification','Đã xóa thành công !!!');
    }
}
