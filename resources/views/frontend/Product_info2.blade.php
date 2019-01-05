<?php
/**
 * Created by PhpStorm.
 * User: Birdwin
 * Date: 2018/12/1
 * Time: 上午 04:38
 */
?>
@extends('frontend.layouts.master')
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
@section('content')

    <div class="text-center ">
        <h1></h1>
    </div>

    <br>

    <div class="container " style="max-width: 40rem;" ">
    <div class="container card border-dark mb-3">
        <h1><span class="btn-primary btn-lg active badge badge-primary btn-block badge " >商品資訊</span></h1>


        <div>
            <form class="form-inline my-2 my-lg-0">
        </div>

        <br>
            <div class="pos-f-t">
                <nav class="navbar navbar-dark  justify-content-between ">
                    <a class="container col-md-1 navbar-brand"></a>
                    <form class="form-inline">
                        <div class="d-flex"></div>

                        <button class="navbar-toggler btn-primary btn-lg active " type="button" data-toggle="collapse" data-target="#productSupportedContent" aria-controls="productSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="productSupportedContent">
                            <ul class="navbar-nav mr-auto bg-lg p-4 ">
                                <li class="nav-item active ">
                                    <a class="nav-link text-right fas fa-search fa-2x" style="color:dodgerblue;" href ="">待確定<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link text-right fas fa-user-alt fa-2x" style="color:dodgerblue;" href ="">待確定<span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link text-right fas fa-cog fa-2x" style="color:dodgerblue;" href ="">待確定<span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link text-right fas fa-shopping-cart fa-2x" style="color:dodgerblue;" href ="">待確定<span class="sr-only">(current)</span></a>
                                </li>


                            </ul>
                        </div>
                    </form>
                </nav>

            </div>

        <figure class="figure">
            <td rowspan="3"><img class="card-img-top" src="{{ URL::asset($products->img) }}" alt="Card image cap"></td>
            <h3 class ="font-weight-bold"> {{$products -> name}}  </h3><b>
            <p><h4 >@銷售入數:{{$products -> amount}}入</h4>
            <p><h4 >@規格：{{$products_info -> contain}}</h4>
        </figure>




        <div class="container ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><del>原價：＄{{$price=$products -> price}}</del></h4>
                    <h4 class="card-title text-danger ">特價：＄{{$price*(1-$products -> discoun) }}</h4>
                </div>
            </div>
        </div>

        <br>
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist"  >
            <li class="nav-item">
                <a class="nav-link active" id="pills-商品資訊-tab" data-toggle="pill" href="#pills-商品資訊" role="tab" aria-controls="pills-商品資訊" aria-selected="true">商品資訊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-規格介紹-tab" data-toggle="pill" href="#pills-規格介紹" role="tab" aria-controls="pills-規格介紹" aria-selected="false">規格介紹</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-售後服務說明-tab" data-toggle="pill" href="#pills-售後服務說明" role="tab" aria-controls="pills-售後服務說明" aria-selected="false">售後服務說明</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-其它說明-tab" data-toggle="pill" href="#pills-其它說明" role="tab" aria-controls="pills-其它說明" aria-selected="false">其它說明</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-商品資訊" role="tabpanel" aria-labelledby="pills-home-tab" style="font-family:微軟正黑體;">{{$products -> describe}}</div>

            <div class="tab-pane fade" id="pills-規格介紹" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">容量</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$products_info -> contain}}</h5></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">應免稅</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$products_info -> is_tax}}</h5></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">保存溫層</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$products_info -> keep_temp}}</h5></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">保存期限</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$products_info -> dateline}}</h5></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">製造商/進口商名稱</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$vendors -> name}}</h5></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">商品來源</a></h5></div>
                    <div class="card-body"><h5 class="card-title">{{$vendors -> country}}</h5></div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-售後服務說明" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div>
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">售後服務</a></h5></div>
                    <div><h6 class="card-title " style="font-family:微軟正黑體;">
                            <br>

                            <a>{{$products_info -> soldedservice}}</a>

                        </h6></div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6><a>若您仍對於購買、付款及運送方式有疑問，請參考客服中心說明，或透過客服信箱、客服專線詢問相關問題。</a></h6></div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-其它說明" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">商品完整說明</a></h5></div>
                    <div class="card-body"><h6 class="card-title" style="font-family:微軟正黑體;">
                        {{$products_info -> otherdescribe}}
                        </h6></div>
                </div>
                <div class="card">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">法律規定及注意事項</a></h5></div>
                    <div class="card-body"><h6 class="card-title" style="font-family:微軟正黑體;">◎ 請存放乾燥通風處，應注意幼童遠離包裝用塑膠袋，以避免窒息危險</h6></div>
                </div>
                <div class="card">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">保存期限</a></h5></div>
                    <div class="card-body"><h6 class="card-title" style="font-family:微軟正黑體;">{{$products_info -> dateline}}</h6></div>
                </div>
                <div class="card">
                    <div class="card-header bg-info">
                        <h5><a class="text-white ">製造商/進口商名稱</a></h5></div>
                    <div class="card-body"><h6 class="card-title" style="font-family:微軟正黑體;">{{$vendors -> name}}</h6></div>
                </div>
            </div>
        </div>


        <section class="py-3 bg-cover bg-attachment" ></section>
    <script>
        $(function(){
            $('.navbar').after('<div id="nav-menu" class="container"></div>');
            $('#nav-menu').append('<div class="collapse navbar-collapse"></div>');
            $('.navbar-collapse').append('<div class="scroll"></div>');
            $('.scroll').append($('.navbar-nav').clone(true));
            $('#nav-menu .scroll>ul>li>ul').hide();
            $('.navbar>div>.navbar-collapse').remove();
            $('.caret').click(function(){
                var visible = $(this).parent().next().is(":hidden");

                $('#nav-menu .scroll>ul>li>ul').hide();
                var total = $(this).parent().next().height();

                if($('#nav-menu .scroll').height()==50){
                    $(this).parent().next().show();
                    $('#nav-menu .scroll').css('height',total+80);
                }else{
                    $('#nav-menu .scroll').css('height','auto');
                }
                if(visible == true){
                    $(this).parent().next().show();
                    $('#nav-menu .scroll').css('height',total+80);
                }
            });
        });
        </script>

    </div>
</div>

<br>
    <br>




@endsection
