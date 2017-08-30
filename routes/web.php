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
Route::get('/', function () {
    return view('welcome');
});

//route for main-menu
Route::group(['prefix'=>'admin'], function(){

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
        Route::get('edit/{id}', 'PostController@updatePost');
        Route::get('edit/{id}', 'PostController@editPost');

        Route::get('delete/{id}', 'PostController@deletePost');

        Route::get('get-all-post', 'PostController@getPostList');

        Route::get('add-new-post', 'PostController@getPostForm');
        Route::post('add-new-post', 'PostController@addToPostList');
    });

     //route for ajax get subcategory.
     Route::group(['prefix'=>'ajax'], function(){
        Route::get('subcategory/{idmaincategory}', 'AjaxController@getSubCategory');
    });
        
    
});