<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\MainCategory;
use App\SubCategory;

class PostController extends Controller
{
    //get all post
    public function getPostList(){
        $post = Post::orderBy('id','desc')->get();
        return view('admin.post.allpost',['post'=>$post]);
    }
    //discount
    public function getDiscountForm(){
        $submenu = SubCategory::where('fk_idMainCategory', 2)->get();
        return view('admin.post.addnewdiscount', ['submenu'=>$submenu]);
    }
    public function addToDiscountList(Request $request){
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
                $img_name = str_random(5)."_".$name;
            }
            $file->move("upload/image",$img_name);
            $post->image = $img_name;
        }

        $post->title = $request->title;
        $post->title_seolink = removeURL($request->title);
        $post->link_to = $request->link_to;
        $post->discount = $request->discount;
        $post->discount_code = $request->discount_code;
        // $post->image = "defaul.jpg";
        $post->short_content = $request->short_content;
        $post->full_content = "nothing";
        $post->online = "1";
        $post->high_light = "1";
        $post->created_at = date("Y-m-d");
        $post->updated_at = date("Y-m-d");
        $post->expired_at = $request->expired_date;
        $post->fk_idSubCategory = $request->subcategory;
        $post->save();
        return redirect("admin/post/add-new-discount-code")->with('notification','Đã thêm thành công');
    }
    //advertisment
    public function getAdsForm(){
        $submenu = SubCategory::where('fk_idMainCategory', 1)->get();
        return view('admin.post.addnewads', ['submenu'=>$submenu]);
    }
    public function addToAdsList(Request $request){
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
                $img_name = str_random(5)."_".$name;
            }
            $file->move("upload/image",$img_name);
            $post->image = $img_name;
        }

        $post->title = $request->title;
        $post->title_seolink = removeURL($request->title);
        $post->link_to = $request->link_to;
        $post->discount = "";
        $post->discount_code = "";
        $post->short_content = $request->short_content;
        $post->full_content = $request->full_content;
        $post->online = $request->online;
        $post->high_light = $request->hlight;
        $post->created_at = date("Y-m-d");
        $post->updated_at = date("Y-m-d");
        $post->expired_at = $request->expired_date;
        $post->fk_idSubCategory = $request->subcategory;
        $post->save();
        return redirect("admin/post/add-new-ads")->with('notification','Đã thêm thành công');

    }
    //get edit form
    public function getEditPostForm($id){
        $submenu = SubCategory::all();
        $post = Post::find($id);
        return view('admin.post.editpost', ['submenu'=>$submenu, 'post'=>$post]);
    }
    //update ads
    public function updateAds(Request $request, $id){
        $post = Post::find($id);
        $this->validate($request,
        [
            'title'=>'required|min:5|max:250',
            'link_to'=>'required|min:5|max:250',
            'short_content'=>'required|min:5|max:500',
            'full_content'=>'required|min:5'
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
            'short_content.max'=>'Nội dung tóm tắt từ 5 đến 100 kí tự.',
            'full_content.min'=>'Nội dung chính từ 5 đến 1000 kí tự.',
        ]);

        if($request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $name = $file -> getClientOriginalName();
            $img_name = str_random(5)."_".$name;
            while(file_exists("upload/image/".$img_name)){
                $img_name = str_random(5)."_".$name;
            }
            $file->move("upload/image",$img_name);
            $post->image = $img_name;
        }

        $post->title = $request->title;
        $post->title_seolink = removeURL($request->title);
        $post->link_to = $request->link_to;
        $post->discount = "";
        $post->discount_code = "";
        $post->short_content = $request->short_content;
        $post->full_content = $request->full_content;
        $post->online = $request->online;
        $post->high_light = $request->hlight;
        $post->created_at = date("Y-m-d");
        $post->updated_at = date("Y-m-d");
        $post->expired_at = $request->expired_date;
        $post->fk_idSubCategory = $request->subcategory;
        $post->save();
        return redirect("admin/post/edit/".$id)->with('notification','Đã thêm thành công');
    }
    //update ads
    public function updateDiscount(Request $request, $id){
        $post = Post::find($id);
        if($request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $name = $file -> getClientOriginalName();
            $img_name = str_random(5)."_".$name;
            while(file_exists("upload/image/".$img_name)){
                $img_name = str_random(5)."_".$name;
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
        $post->full_content = "nothing";
        $post->online = $request->online;
        $post->high_light = $request->hlight;
        $post->created_at = date("Y-m-d");
        $post->updated_at = date("Y-m-d");
        $post->expired_at = $request->expired_date;
        $post->fk_idSubCategory = $request->subcategory;
        $post->save();
        return redirect("admin/post/edit/".$id)->with('notification','Đã thêm thành công');
    }
    //delete post
    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post/get-all-post')->with('notification','Đã xóa thành công !!!');
    }
}
