<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class shopController extends Controller
{
    //





    function getCategory(Request $re)
    {
        $category =  DB::table('categories')->get();
        return view('/shop',['category'=>$category]);    
    }
}
