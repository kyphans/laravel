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
Route::get('login','loginController@getlogin');
Route::post('login','loginController@postlogin');

//model
Route::get('model/save',function (){
    $user = new App\User();
    $user->name = 'Mai';
    $user->email = 'Mai@gmail.com';
    $user->password = '123456';

    $user->save();

    echo "Da thuc hien save()";
});
Route::get('model/query',function (){
   $user = App\User::find(3);
   echo $user->name;
});
Route::get('model/taikhoan/save',function (){
   $user = new App\modle_taikhoan();
   $user->ten_dang_nhap = 'quocky1';
   $user->mat_khau = bcrypt('123456');

   $user->save();
   echo 'Da save db:taikhoan';
});
Route::get('model/taikhoan/getall',function (){
   $user = App\modle_taikhoan::all()->toJson();
   var_dump($user);
});

//home
Route::get('home','home@getMaster');
//Route::get('home/order','home@getOrder');
Route::prefix('home/order')->group(function () {
    Route::get('/','home@getOrder');
    Route::get('phucvu','home@getPhucVu');
});
