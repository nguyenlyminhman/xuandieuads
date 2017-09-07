<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\Image;

class PagesController extends Controller
{
    function __construct(){

        $mmenu = MainCategory::all();
        $crs_img = Image::where('fk_idCategoryImg', '=', 1)->get();
        
        view()->share('mmenu', $mmenu);
        view()->share('crs_img', $crs_img);
    }
    //
    public function getHome(){
        return view('pages.home', ['title'=>'Trang chủ']);
    }
}
