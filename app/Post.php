<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "post";
    public function subCategory(){
        return $this->belongsTo('App\SubCategory','fk_idSubCategory','id');
    }
}
