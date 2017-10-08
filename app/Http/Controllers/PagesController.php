<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\SubCategory;
use App\Image;
use App\Post;

class PagesController extends Controller
{
    function __construct(){
        $mmenu = MainCategory::all();
        $smenu = SubCategory::all()->sortBy('fk_idMainCategory');
        $image = Image::all()->sortByDesc('id');
        $hot = Post::all()->sortByDesc('id');
        view()->share('mmenu', $mmenu);
        //lấy 
        view()->share('smenu', $smenu);
        //lay hinh anh sale duoi carousel
        view()->share('image', $image);
        //xuat hien 5 tin hot canh carousel
        view()->share('hot', $hot);
    }
    //
    function getHome(){
        $khuyenmai = MainCategory::find(1)->post()->paginate();
        return view('pages.home', ['title'=>'Trang chủ', 'khuyenmai'=>$khuyenmai]);
    }
    //dang lam
    function getHot(){
        $hotpage = Post::where('high_light', 0)->latest()->paginate(15);
        return view('pages.hot', ['title'=>'Hot Trong Ngày', 'hotpage'=>$hotpage]);
    }
    //dang lam
    function getMuaOnline(){
        $online = Post::where('online', 0)->latest()->paginate(15);
        return view('pages.muaonline', ['title'=>'Hot Trong Ngày', 'online'=>$online]);
    }

    function getMaGiamGia($id){
        $loaikhuyenmai = SubCategory::find($id);
        $tinkhuyenmai = Post::where('fk_idSubCategory', $id)->latest()->paginate(15);
        return view('pages.giamgia', ['title'=>'Mã Giảm Giá...', 'loaikhuyenmai'=> $loaikhuyenmai, 'tinkhuyenmai'=> $tinkhuyenmai]);
    }
    function getKhuyenMai($id){
        $loaikhuyenmai = SubCategory::find($id);
        $tinkhuyenmai = Post::where('fk_idSubCategory', $id)->latest()->paginate(15);
        return view('pages.khuyenmai', ['title'=>'Tin Khuyễn Mãi...', 'loaikhuyenmai'=> $loaikhuyenmai, 'tinkhuyenmai'=> $tinkhuyenmai]);
    }
    // function getAllKhuyenMai(){
    //     $loaikhuyenmai = SubCategory::find(1);
    //     $tinkhuyenmai = Post::where('fk_idSubCategory', 1)->latest()->paginate(15);
    //     return view('pages.khuyenmai', ['title'=>'Tin Khuyễn Mãi...', 'loaikhuyenmai'=> $loaikhuyenmai, 'tinkhuyenmai'=> $tinkhuyenmai]);
    // }
    function getChiTietKhuyenMai($id){
        $chitietkhuyenmai = Post::find($id);
        return view('pages.chitiet', ['title'=>'Chi Tiết Khuyễn Mãi...', 'chitietkhuyenmai'=> $chitietkhuyenmai]);
    }

    function postTimKiem(Request $request){
        $tukhoa = $request->tukhoa;
        $tinkhuyenmai = MainCategory::find(1)->post()->where('title','like','%'.$tukhoa.'%')->
                        orwhere('short_content','like','%'.$tukhoa.'%')->take(60)->paginate(10);
        return view('pages.timkiem', ['title'=>'Tìm kiếm...', 'tukhoa'=>$tukhoa ,'tinkhuyenmai'=> $tinkhuyenmai]);
    }
}
