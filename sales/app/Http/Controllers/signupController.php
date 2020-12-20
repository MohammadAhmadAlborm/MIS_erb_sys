<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class signupController extends Controller
{
    //


    function login(Request $re)
    {
        $name=$re->input('name');
        $email=$re->input('email');


        $checklogin=DB::table('users')->where(['name'=>$name,'email'=>$email])
        ->get();
        if(count($checklogin)>0)
        {
            return redirect('/');
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
        $query=DB::table('users')->insert(
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
