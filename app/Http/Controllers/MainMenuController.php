<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;

class MainMenuController extends Controller
{
    //add more menu name
    public function postMainMenu(Request $request){
        $this->validate($request,
        [
            'main_cate_name'=>'required|unique:main_category,main_cate_name|min:3|max:100'
        ],
        [
            'main_cate_name.required'=>'Chưa nhập tên menu chính.',
            'main_cate_name.unique'=>'Tên Menu đã tồn tại. Hãy chọn tên Menu khác.',
            'main_cate_name.min'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.',
            'main_cate_name.max'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.'
        ]);
        $menu = new MainCategory;
        $menu->main_cate_name = $request->main_cate_name;
        $menu->main_cate_seolink = removeURL($request->main_cate_name);
        $menu->main_cate_status = 1;
        $menu->created_at =  date("Y-m-d");
        $menu->updated_at =  date("Y-m-d");
        $menu->fk_idManager = 1;  
        $menu->save();
        return redirect('admin/main-menu/get-main-menu-list')->with('notification','Thêm thành công !!!');
    }
    //
    public function editMainMenu ($id){
        $menu = MainCategory::find($id);
        return view('admin.maincategory.edit', ['menu'=>$menu]);        
    }
    //
    public function updateMainMenu (Request $request, $id){
        $menu = MainCategory::find($id);

        $this->validate($request,
        [
            'main_cate_name'=>'required|min:3|max:100'
        ],
        [
            'main_cate_name.required'=>'Chưa nhập tên menu chính.',
            'main_cate_name.min'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.',
            'main_cate_name.max'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.'
        ]);
        $menu->main_cate_name = $request->main_cate_name;
        $menu->main_cate_seolink = removeURL($request->main_cate_name);
        $menu->main_cate_status = $request->status;
        $menu->updated_at =  date("Y-m-d");
        $menu->save();
        return redirect('admin/main-menu/edit/'.$id)->with('notification','Đã cập nhật thành công.');
    }
   
    //
    public function getMainMenuList (){
        $mainMenu= MainCategory::all();
        return view('admin.maincategory.allcategory', ['mainMenu'=>$mainMenu]);
    }
    //
    public function deleteMainMenu($id){
        $menu = MainCategory::find($id);
        $menu->delete();
        return redirect('admin/main-menu/get-main-menu-list')->with('notification','Đã xóa thành công !!!');
    }
}
