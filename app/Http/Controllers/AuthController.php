<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\modle_taikhoan;
class AuthController extends Controller
{
    public function getlogin(){
        return view('dangnhap');
    }
    public function postlogin(Request $request){
        $username = $request['username'];
        $password = $request['password'];

        if(Auth::attempt(['name'=>$username,'password'=>$password])){
            return view('thanhcong');
        }
        else
            return view('dangnhap');

//        $user = modle_taikhoan::find(2);
//        dd( Auth::login($user));
//        Auth::login($user);
//        return view('thanhcong');

    }

}
