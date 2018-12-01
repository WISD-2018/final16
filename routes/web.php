<?php

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
    return view('layout.default');
});

Route::get('v2',function (){
    return view('layout2.default',['title'=>'v2']);
});

Route::get('test',function (){
   return view('test');
});

//
Route::get('/buggy',function (){
    return view('buggy',['title'=>'購物車']);
});

Route::get('/feedback',function (){
   return view('feedback',['title'=>'問題回報']);
});

Route::get('/emergency',function (){
   return view('emergency',['title'=>'緊急回報']);
});

Route::get('/member', function () {
    return view('member',['title'=>'會員資訊']);
});
