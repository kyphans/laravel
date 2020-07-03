<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function getMaster (){
        return view('master/master');
    }
    public function getOrder (){
        return view('home/order');
    }
    public function getPhucVu (){
        return view('home/phucvu');
    }
    public function getTraMon (){
        return view('home/tramon');
    }
    public function getYCThanhToan (){
        return view('home/ycthanhtoan');
    }
}
