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

Route::get('/member', function () {
    return view('member');
});

Route::get('/buggy',function (){
    return view('buggy',['title'=>'購物車']);
});

Route::get('v2',function (){
    return view('layout2.default');
});

Route::get('test',function (){
   return view('test');
});