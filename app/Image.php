<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = "image";
    public function categoryImage(){
        return $this->belongsTo('App\CategoryImage','fk_idCategoryImg', 'id');
    }
}
