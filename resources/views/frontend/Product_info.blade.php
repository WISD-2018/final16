<?php
/**
 * Created by PhpStorm.
 * User: Birdwin
 * Date: 2018/11/30
 * Time: 下午 03:30
 */
?>
@extends('frontend.layouts.master')
<link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous">
@section('content')

    <br>
    <br>
    <div class="text-center ">
        <h1>為您提供最好的服務</h1>
    </div>

    <br>

    <div class="container text-center" style="max-width: 40rem;" ">
    <div class="container card border-dark mb-3">
        <h1><span class="btn-primary btn-lg active badge badge-primary btn-block badge " >商品資訊查詢</span></h1>


        <div>
            <form class="form-inline my-2 my-lg-0" action="/商品資訊_查詢" method="post">
        </div>

        <div class="card-header ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                {{csrf_field()}}
                <input class="form-control mr-sm-2"
                       name ="name"
                       type="text"
                       placeholder="全館搜尋 > 請選擇分類或輸入關鍵字"
                       aria-label="Search" style="width: 360px";>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>

                </div>
            </nav>

            <section class="py-2 bg-cover bg-attachment" style="background-image : >
                <div class ="container">
                    <div>
            <h2><span class="d-flex btn-primary btn-lg active badge badge-primary badge" style="width: 120px"; >全館搜尋</span></h2>

                    <div class="row">
                        <div class="flex-md-row-reverse col-md-3 d-flex">
                            <div>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">冷凍食品</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">飲料零食</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">美妝護理</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">日用百貨</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">傢俱寢室</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">大小家電</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">生鮮冷藏</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">米油沖泡</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">母嬰保健</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">生活休閒</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">服飾鞋包</a></h5>
                                <h5><a href="#" class = "font-weight-bold" style="color:dodgerblue;">3C</a></h5>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div>
                                <i class="fas fa-shopping-basket fa-10x"></i>
                            </div>
                        </div>

                    </div>

                </div>

        <br>
        <br>


            <div class="container ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex card-title font-weight-bold">熱門搜尋商品推薦</h4>
                    </div>
                        <li class="d-flex list-group-item font-weight-bold">春風超細柔抽取式衛生紙</li>
                        <li class="d-flex list-group-item font-weight-bold">威猛先生去霉劑</li>
                        <li class="d-flex list-group-item font-weight-bold">牛奶花生</li>
                    </div>
                </div>
            </div>

        </div>
                <br>
        </div>
    </div>
                <br>
            <br>
        <br>
    <br>


@endsection
