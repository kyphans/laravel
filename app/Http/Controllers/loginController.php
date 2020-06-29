<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function getlogin(){
        return view('Login/login');
    }
    public function postlogin(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        $request->validate(
            [
                'username' => 'required|min:3',
                'password' => 'required|min:3'
            ],
            [
                'username.required' => 'Username không được để trống',
                'username.min' => 'Username quá ngắn',
                'password.required' => 'Password không được để trống',
                'password.min' => 'Password quá ngắn'
            ]

        );

        if(Auth::attempt(['name'=>$username,'password'=>$password])){
            return view('thanhcong');
        }
        else
            return view('Login/login');
    }
}
