<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)

    {
        $a=Auth::attempt(['name'=>$request->name,'password'=>$request->password]);

        if($a){
            return [
                "status"=>"true",
                "message"=>"登录成功",
                "user_id"=>Auth::user()->id,
                "username"=>Auth::user()->name,
            ];

        }else{
            return [
                "status"=>"false",
                "message"=>"登录失败",
                "user_id"=>"0",
                "username"=>"guest"
            ];

        }


    }
}
