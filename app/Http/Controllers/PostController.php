<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\MainCategory;
use App\SubCategory;

class PostController extends Controller
{
    //
    public function getPostForm(){
        $mainmenu = MainCategory::all();
        $submenu = SubCategory::all();
        return view('admin.post.addnewpost', ['mainmenu'=>$mainmenu, 'submenu'=>$submenu]);
    }

    public function addToPostList(Request $request){
        $post = new Post;
        $this->validate($request,
        [
            'title'=>'required|min:5|max:250',
            'link_to'=>'required|min:5|max:250',
            'short_content'=>'required|min:5|max:500'
        ]
        ,
        [
            'title.required'=>'Hãy nhập tiêu đề.',
            'title.min'=>'Tiêu đề từ 5 đến 250 kí tự',
            'title.max'=>'Tiêu đề từ 5 đến 250 kí tự',
            'link_to.required'=>'Hãy nhập link liên kết.',
            'link_to.min'=>'Link liên kết từ 5 đến 250 kí tự',
            'link_to.max'=>'Link liên kết từ 5 đến 250 kí tự',
            'short_content.required'=>'Hãy nhập vào nội dung tóm tắt.',
            'short_content.min'=>'Nội dung tóm tắt từ 5 đến 100 kí tự.',
            'short_content.max'=>'Nội dung tóm tắt từ 5 đến 100 kí tự.'
        ]);

        if($request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $name = $file -> getClientOriginalName();
            $img_name = str_random(5)."_".$name;
            while(file_exists("upload/image/".$img_name)){
                $img_name = str_random(8)."_".$name;
            }
            $file->move("upload/image",$img_name);
            $post->image = $img_name;
        }

        $post->title = $request->title;
        $post->title_seolink = removeURL($request->title);
        $post->link_to = $request->link_to;
        $post->discount = $request->discount;
        $post->discount_code = $request->discount_code;
        
        $post->short_content = $request->short_content;
        $post->full_content = $request->full_content;
        $post->click_counter = "0";
        $post->high_light = $request->hlight;
        $post->created_at = date("Y-m-d");
        $post->updated_at = date("Y-m-d");
        $post->expired_at = $request->expired_date;
        $post->fk_idSubCategory = $request->subcategory;
        $post->save();
        return redirect("admin/post/add-new-post")->with('notification','Đã thêm thành công');

    }
}
