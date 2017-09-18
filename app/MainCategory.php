<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //
    protected $table = "main_category";
    //link to subcategory table
    public function subCategory(){
        return $this->hasMany('App\SubCategory','fk_idMainCategory', 'id');
    }
    //link through subcategory table
    public function post(){
        return $this->hasManyThrough('App\Post','App\SubCategory','fk_idMainCategory','fk_idSubCategory','id');
    }
    // //link to news table
    // public function post(){
    //     return $this-> hasMany('App\Post','fk_idMaincategory','id');
    // }
}
