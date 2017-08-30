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

}
