<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello',function (){
    return 'Xin chao ky phan';
});
Route::get('testcode', function (){
    echo "<h1> Xin chao </h1>";
});

Route::get('database',function (){
//    Schema::create('users1', function($table)
//    {
//        $table->increments('id');
//    });

//    Schema::drop('users1');
//    echo "Done!";
});

//Gui nhan request
Route::get('getForm',function (){
    return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);

//dang nhap
Route::get('dangnhap',function (){
    return view('dangnhap');
});
Route::post('login','AuthController@login')->name('login');
