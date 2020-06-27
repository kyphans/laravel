<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyController extends Controller
{
    //
    public function postForm(Request $request)
    {
        echo $request->hoten;
    }
}
