<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $table = "manager";

    public function mainCategory(){
        return $this->hasMany('App\MainCategory','fk_idManager','id');
        }

    public function categoryImg(){
return $this->hasMany('App\CategoryImage','fk_idManager','id');
        }
}