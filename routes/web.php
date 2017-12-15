<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/login', 'UserController@getLoginForm');
Route::post('admin/login', 'UserController@loginAdmin');
Route::get('admin/logout', 'UserController@logoutAdmin');

//route for admin management,'middleware'=>'adminLogin'
Route::group(['prefix'=>'admin', 'middleware'=>'adminlogin'], function(){
    Route::get('dashboard', function(){
        return view('admin.layout.index');
    });
    Route::group(['prefix'=>'main-menu'], function(){
        //getting main menu info
        Route::get('edit/{id}', 'MainMenuController@editMainMenu');
        //editing main menu info
        Route::post('edit/{id}', 'MainMenuController@updateMainMenu');
        //getting all menu info list
        Route::get('get-main-menu-list', 'MainMenuController@getMainMenuList');
        //adding new menu info to list
        Route::post('get-main-menu-list', 'MainMenuController@postMainMenu');
        //deleting main menu
        Route::get('delete/{id}', 'MainMenuController@deleteMainMenu');
    });
    //route for sub-menu
    Route::group(['prefix'=>'sub-menu'], function(){

        //getting main menu info
        Route::get('edit/{id}', 'SubMenuController@editSubMenu');
        //editing main menu info
        Route::post('edit/{id}', 'SubMenuController@updateSubMenu');
        //getting all menu info list
        Route::get('get-sub-menu-list', 'SubMenuController@getSubMenuList');
        //adding new menu info to list
        Route::post('get-sub-menu-list', 'SubMenuController@postSubMenu');
        //deleting main menu
        Route::get('delete/{id}', 'SubMenuController@deleteSubMenu');

    });
    //route for category-image
    Route::group(['prefix'=>'categoryimg'], function(){
        
        Route::get('edit/{id}', 'CategoryImageController@editCategoryImg');
        Route::post('edit/{id}', 'CategoryImageController@updateCategoryImg');

        Route::get('delete/{id}', 'CategoryImageController@deleteCategoryImg');

        Route::get('get-all-category-image', 'CategoryImageController@getCategoryImgList');
        Route::post('get-all-category-image', 'CategoryImageController@postCategoryImg');
    });
    //route for image
    Route::group(['prefix'=>'image'], function(){
        Route::get('delete/{id}', 'ImageController@deleteImage');

        Route::get('edit/{id}', 'ImageController@editImage');
        Route::post('edit/{id}', 'ImageController@updateImage');

        Route::post('get-all-image', 'ImageController@postImage');
        Route::get('get-all-image', 'ImageController@getAllImage');
    });
     //route for post
    Route::group(['prefix'=>'post'], function(){
        //editing discount post information  
        Route::get('edit/{id}', 'PostController@getEditPostForm');
        Route::post('edit-ads/{id}', 'PostController@updateAds');
        Route::post('edit-discount/{id}', 'PostController@updateDiscount');
        //deleting discount post information
        Route::get('delete/{id}', 'PostController@deletePost');
        //get all post
        Route::get('get-all-ads', 'PostController@getPostAds');
        Route::get('get-all-discount', 'PostController@getPostDiscount');
        //adding new discount code
        Route::get('add-new-discount-code', 'PostController@getDiscountForm');
        Route::post('add-new-discount-code', 'PostController@addToDiscountList');

        //adding new ads information
        Route::get('add-new-ads', 'PostController@getAdsForm');
        Route::post('add-new-ads', 'PostController@addToAdsList');
    });
     //route for ajax get subcategory.
     Route::group(['prefix'=>'ajax'], function(){
        Route::get('subcategory/{idmaincategory}', 'AjaxController@getSubCategory');
    });
    //route for user
    Route::group(['prefix'=>'user'], function(){
        Route::get('delete/{id}', 'UserController@deleteUser');

        Route::get('update-info/{id}', 'UserController@getUserInfo');
        Route::post('update-info/{id}', 'UserController@updateUserInfo');

        Route::get('update-pass/{id}', 'UserController@getUserPass');
        Route::post('update-pass/{id}', 'UserController@updateUserPass');

        Route::post('get-all-user', 'UserController@postUser');
        Route::get('get-all-user', 'UserController@getAllUser');
    });
});

//route for user 
Route::get('/', 'PagesController@getHome');
Route::get('hot', 'PagesController@getHot');
Route::get('mua-online', 'PagesController@getMuaOnline');
Route::get('ma-giam-gia-voucher/{id}/{sub_cate_seolink}.html', 'PagesController@getMaGiamGia');
Route::get('tin-khuyen-mai/{id}/{sub_cate_seolink}.html', 'PagesController@getKhuyenMai');
Route::get('chi-tiet-khuyen-mai/{id}/{title_seolink}.html', 'PagesController@getChiTietKhuyenMai');
Route::post('timkiem', 'PagesController@postTimKiem');
