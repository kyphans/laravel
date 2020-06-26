<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function login(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['ten_dang_nhap'=>$username,'mat_khau'=>$password]))
            return view('thanhcong');
        else
            return view('dangnhap');
    }
}
