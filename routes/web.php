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
    return view('layout2.default',['title'=>'首頁']);
});

Route::get('v2',function (){
    return view('layout2.default',['title'=>'v2']);
});



Route::group(['prefix'=> 'buggy'],function (){
    Route::get('testC','BuggyController@test');
    Route::get('testS/{id}','BuggyController@test2');
    Route::get('/admin/{buggies_id}','BuggyController@index');
    Route::get('/','BuggyController@show');
    Route::post('/waitfor','BuggyController@waitfor');
    Route::get('checkout','BuggyController@checkout');


});

Route::get('/feedback',function (){
   return view('feedback',['title'=>'問題回報']);
});


Route::get('/emergency',function (){
   return view('emergency',['title'=>'緊急回報']);
});

Route::get('/member', 'MemberController@index');

Route::get('/member/modify', 'MemberController@modify');

Route::post('/member/modify', 'MemberController@update');

Route::post('/member/upload/img','MemberController@upload_img');

Route::get('qrcode',function (){
    return view('qrcode',['title'=>'產生Qrcode']);
});

Route::get('/qrcode/reader',function (){
    return view('qreader',['title'=>'綁定籃子']);
});

Route::get('qrcode/blending/{buggy_id}','BuggyController@blending');
Route::get('qrcode/unblending','BuggyController@unblending');

Route::post('result','BuggyController@result');


Route::group(['middleware' => ['web']], function () {
    //登入登出
    Route::get('auth/login','MemberController@getLogin');
    Route::post('auth/login','MemberController@postLogin');
    Route::get('auth/logout','MemberController@getLogout');
    Route::post('auth/logout','MemberController@postLogout');
    //註冊
    Route::get('auth/register','MemberController@getRegister');
    Route::post('auth/register','MemberController@postRegister');

});

//BirWin

Route::get('商品資訊/{id}', 'Product_infoController@product_info');

Route::get('商品資訊', 'Product_infoController@product_info')->name('商品資訊');

Route::get('商品資訊_查詢','Product_infoController@index')->name('商品資訊_查詢');

Route::post('商品資訊_查詢','Product_infoController@product_Search');

//測試功能
Route::get('/shopping',function (){
    return view('product_insert',['title'=>'新增購物商品']);
});
Route::post('/shopping','BuggyController@product_insert');
Route::post('/shopping/destory','BuggyController@product_destory');
Route::post('/shopping/update','BuggyController@product_update');
Route::post('/shopping/checkout','BuggyController@product_checkout');

