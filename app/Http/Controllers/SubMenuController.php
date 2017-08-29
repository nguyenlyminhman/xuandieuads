<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\MainCategory;

class SubMenuController extends Controller
{
    //get all sub menu list.
    public function getSubMenuList (){
        $subMenu= SubCategory::all();
        $mainMenu = MainCategory::all();
        return view('admin.subcategory.allsubcategory', ['subMenu'=>$subMenu, 'mainMenu'=>$mainMenu]);
    }

    //add more menu name.
    public function postSubMenu(Request $request){
        $subMenu = new SubCategory;
        $this->validate($request,
        [
            'sub_cate_name'=>'required|unique:sub_category,sub_cate_name|min:3|max:100'
        ],
        [
            'sub_cate_name.required'=>'Chưa nhập tên menu chính.',
            'sub_cate_name.unique'=>'Tên Menu đã tồn tại. Hãy chọn tên Menu khác.',
            'sub_cate_name.min'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.',
            'sub_cate_name.max'=>'Tên menu chính có độ dài từ 3 đến 100 kí tự.'
        ]);
        $subMenu->sub_cate_name = $request->sub_cate_name;
        $subMenu->sub_cate_seolink = removeURL($request->sub_cate_name);
        $subMenu->sub_cate_status = 0;
        $subMenu->created_at =  date("Y-m-d");
        $subMenu->updated_at =  date("Y-m-d");
        $subMenu->fk_idMainCategory = $request->fk_idmaincategory;  
        $subMenu->save();
        return redirect('admin/sub-menu/get-sub-menu-list')->with('notification','Thêm thành công !!!');
    }
    //get editing submenu view
    public function editSubMenu ($id){
        $mainMenu = MainCategory::all();
        $subMenu = SubCategory::find($id);
        return view('admin.subcategory.edit', ['subMenu'=>$subMenu, 'mainMenu'=>$mainMenu]);        
    }
    //
    public function updateSubMenu (Request $request, $id){
        $subMenu = SubCategory::find($id);
        $this->validate($request,
        [
            'sub_cate_name'=>'required|min:3|max:100',
        ],
        [   
            'sub_cate_name.required'=>'Chưa nhập tên menu chính.',
            'sub_cate_name.min'=>'Tên menu phụ có độ dài từ 3 đến 100 kí tự.',
            'sub_cate_name.max'=>'Tên menu phụ có độ dài từ 3 đến 100 kí tự.'
        ]);
        $subMenu->sub_cate_name = $request->sub_cate_name;
        $subMenu->sub_cate_seolink = removeURL($request->sub_cate_name);
        $subMenu->sub_cate_status = $request->status;
        $subMenu->updated_at =  date("Y-m-d");
        $subMenu->fk_idMainCategory = $request->idmaincategory;
        $subMenu->save();
        return redirect('admin/sub-menu/edit/'.$id)->with('notification','Đã cập nhật thành công.');
    }
    
    //
    public function deleteSubMenu($id){
        $subMenu = SubCategory::find($id);
        $subMenu->delete();
        return redirect('admin/sub-menu/get-sub-menu-list')->with('notification','Đã xóa thành công !!!');
    }
}
