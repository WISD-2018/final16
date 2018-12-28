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


//
Route::group(['prefix'=> 'buggy'],function (){
    Route::get('test-bro/{sale_id}','BuggyController@update');
    Route::get('/admin/{member_id}/{buggies_id}','BuggyController@index');
    Route::get('/{member_id}/{buggies_id}','BuggyController@show');
    Route::post('/{member_id}/{buggies_id}/waitfor','BuggyController@waitfor');
//    checkout------------->

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



Route::post('result','BuggyController@result');

Route::get('/shopping',function (){
    return view('product_insert',['title'=>'新增購物商品']);
});
Route::post('/shopping','BuggyController@product_insert');
Route::post('/shopping/destory','BuggyController@product_destory');
Route::post('/shopping/update','BuggyController@product_update');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myid',function (){
    if(\Illuminate\Support\Facades\Auth::check()){
        return \Illuminate\Support\Facades\Auth::id();
    }
});

Route::group(['middleware' => ['web']], function () {
    //认证路由
    Route::get('auth/login','MemberController@getLogin');
    Route::post('auth/login','MemberController@postLogin');
    Route::get('auth/logout','MemberController@getLogout');
    Route::post('auth/logout','MemberController@postLogout');
    //注册路由
    Route::get('auth/register','MemberController@getRegister');
    Route::post('auth/register','MemberController@postRegister');

});

Route::get('/auth/check',function (){
    if(\Illuminate\Support\Facades\Auth::check()){
        return 'check'.\Illuminate\Support\Facades\Auth::id();
    }else{
        return 'failed';
    }
});


