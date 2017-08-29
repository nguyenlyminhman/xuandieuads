<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function getPostForm(){
        return view('admin.post.addnewpost');
    }

}
