<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function getlogin(){
        return view('login');
    }

    function postlogin(Request $request){
        return $request;        
    }

    function userprofile(){
        $userData=[
            'name'=>'umesh',
            'age'=>'22',
            'email'=>'umeshkumawat280@gmail.com',
            'password'=>'12345678'
        ];
        return view('profile',$userData);
    }
}
