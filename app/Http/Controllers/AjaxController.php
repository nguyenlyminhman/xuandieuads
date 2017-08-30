<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\SubCategory;

class AjaxController extends Controller
{
    //
    public function getSubCategory($idmaincategory){
        $subcategory = SubCategory::where('fk_idMainCategory',$idmaincategory)->get();
        foreach($subcategory as $smenu){
           echo "<option value='".$smenu->id."'>" .$smenu->sub_cate_name."</option>";
        }
    }
}
