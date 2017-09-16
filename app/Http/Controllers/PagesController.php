<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\Image;
use App\Post;

class PagesController extends Controller
{
    function __construct(){

        $mmenu = MainCategory::all();
        $image = Image::all()->sortByDesc('id');
        $hot = Post::all()->sortByDesc('id');
        view()->share('mmenu', $mmenu);
        view()->share('image', $image);
        view()->share('hot', $hot);
    }
    //
    public function getHome(){
        return view('pages.home', ['title'=>'Trang chủ']);
    }
}
