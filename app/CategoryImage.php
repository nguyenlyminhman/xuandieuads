<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    //
    protected $table = "category_img";
    //
    public function image(){
        return $this->hasMany('App\Image','fk_idCategoryImg', 'id');
    }
    //
    public function manager(){
        return $this->belongsTo('App\Manager','fk_idManager', 'id');
    }
}
