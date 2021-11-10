<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ApiController extends Controller
{
    //
    public function APICateList(){
        return Category::all();
    }
    public function APICatePost(Request $request){
        $var = new Category();
       $var->name= $request->name;
       $var->desc= $request->desc;
       $var->save();
    }
}
