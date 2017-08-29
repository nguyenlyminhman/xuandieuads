<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = "sub_category";
    //link to main_category table
    public function mainCategory(){
        return $this->belongsTo('App\MainCategory','fk_idMainCategory','id');
    }
    //link to post table
    public function pots(){
        return $this->hasMany('App\Post','fk_idSubCategory','id');
    }
}
