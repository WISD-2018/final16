<?php
/**
 * Created by PhpStorm.
 * User: Birwin
 * Date: 2018/12/27
 * Time: 下午 01:49
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
        <h1>可能是您想要選擇的商品</h1>
    </div>

    <br>

    <div class="container text-center" style="max-width: 40rem;" ">
    <div class="container card border-dark mb-3">
        <h1><span class="btn-primary btn-lg active badge badge-primary btn-block badge " >商品選擇項目</span></h1>



        <div class="card-header ">
            <section class="py-2 bg-cover bg-attachment" >
                <div class ="container">
            <div>
                <h2><span class="d-flex btn-primary btn-lg active badge badge-primary badge" ; >搜尋：{{ $request }}</span></h2>


                {{--{{ dd($results) }}--}}

                @foreach($results as $result)
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">
                            <a href="商品資訊/{{ $result->id }}">
                                <img class="card-img-top" src="{{ URL::asset($result->img)}}" alt="Card image cap">
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <p class="card-text text-center"> {{$result->name}}</p>
                        </th>
                    </tr>
                    </tbody>
                </table>
                @endforeach





                {{--<div class = row>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="card"  style="height: 13rem;">--}}
                            {{--<a href="/商品資訊/1">--}}
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-6">--}}
                        {{--<div class="card"  style="height: 13rem;">--}}
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <br>







            <br>
            <br>





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