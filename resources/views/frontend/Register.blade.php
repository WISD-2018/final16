<?php
/**
 * Created by PhpStorm.
 * User: Birdwin
 * Date: 2018/11/29
 * Time: 下午 09:46
 */
?>
@extends('frontend.layouts.master')

@section('content')

    <br>
    <br>
    <div class="text-center ">
        <h1>加入會員</h1>

    </div>

    <br>

    <div class="container text-center container card border-dark mb-3" style="max-width: 45rem;" ">
            <h1><span class="btn-primary btn-lg active badge badge-primary btn-block badge " >會員註冊</span></h1>

        <br>

        {{--<div><form class="form-inline my-2 my-lg-0"></div>--}}


        <div class="text-center " >
            <h1><p class="font-weight-bold">歡迎成為我們的一份子</p></h1>
        </div>

        <br>
        <form class="form-inline " action="{{ url('/auth/register') }}" method="post">
            {{csrf_field()}}
        <div class="card-header " style="width: 300rem;">
        <br>
        {{--<div>--}}
            {{--<form class=" form-inline my-2 my-lg-0">--}}
        {{--</div>--}}
        <br>
            <nav class="navbar navbar-light bg-light ">

                    <div class="input-group ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text " id="basic-addon1" >姓名</span>
                        </div>
                        <input  style="width: 300px" name = 'name' type="text" class="container" placeholder="請正確輸入訂購人姓名" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
            </nav>
            <br>
            <nav class="navbar navbar-light bg-light">

                    <div class=" input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                        </div>
                        <input style="width: 300px" name = 'email' type="text" class="container " placeholder="Ex：XXXX@gmail.com....." aria-label="Username" aria-describedby="basic-addon1">
                    </div>

            </nav>
            <br>
            <nav class="navbar navbar-light bg-light">

                <div class=" input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">帳號</span>
                    </div>
                    <input style="width: 300px" name = 'account' type="text" class="container " placeholder="請輸入大小寫英文與數字" aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </nav>
            <br>
            <br>
            <nav class="navbar navbar-light bg-light">

                    <div class=" input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">密碼</span>
                        </div>
                        <input style="width: 300px" name = 'password' type="password" class="container " placeholder="請輸入8-20字元大小寫英文與數字" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

            </nav>
            <br>
            <nav class="navbar navbar-light bg-light">

                    <div class=" input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">電話</span>
                        </div>
                        <input style="width: 300px" name = 'phone' type="text" class="container " placeholder="Ex：(09)XXXXXXXX" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

            </nav>
            <br>
            <nav class="navbar navbar-light bg-light">

                    <div class=" input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">生日</span>
                        </div>
                        <input style="width: 300px" name = 'birthday' type="date" class="container " placeholder="Ex；1997/01/01" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

            </nav>
            <br>
            <button  type="submit" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal" style="width: 150px";>
                註冊
            </button>

        </div>
    </div>

        <br>

        <br>

    </form>

    <br>
    <br>
    <br>
    <br>
@endsection