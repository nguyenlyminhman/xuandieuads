<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
class PagesController extends Controller
{
    //
    public function getHome(){
        $mmenu = MainCategory::all();
        return view('pages.home', ['mmenu'=>$mmenu]);
    }
}
