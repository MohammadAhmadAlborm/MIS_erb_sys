<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class signupController extends Controller
{
    //


    function login(Request $re)
    {
        $email=$re->input('name');
        $password=$re->input('email');


        $checklogin=DB::table('signup')->where(['name'=>$name,'email'=>$email])
        ->get();
        if(count($checklogin)>0)
        {
            return redirect('adminOperation');
        }
        else{
            return back()->with('fail','Failed Login');
        }
    }

    function registeration(Request $re)
    {
        $re->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );
        $query=DB::table('signup')->insert(
            [
            'name'=>$re->input('name'),
            'email'=>$re->input('email'),
            'password'=>$re->input('password'),
            ]
        );
        if($query)
        {   
            return back()->with('success','Data inserted');
        }
        else{
            return back()->with('fail','Data not inserted ');
        }
    }
}
