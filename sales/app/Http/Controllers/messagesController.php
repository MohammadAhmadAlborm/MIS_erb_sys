<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class messagesController extends Controller
{
    function addMessage(Request $re){
        $re->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required',
            ]
        );
        $query=DB::table('messages')->insert(
            [
            'name'=>$re->input('name'),
            'email'=>$re->input('email'),
            'subject'=>$re->input('subject'),
            'message'=>$re->input('message'),
            ]
        );
        if($query)
        {
            return back()->with('success','Successfully');
        }
        else{
            return back()->with('fail','Data not inserted ');
        }
    }
}
