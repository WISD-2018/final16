@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 什麼版本IE 就用什麼版本的標準模式 -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test </title>
    <!-- 在網頁插入CSS從外部呼叫的指令 -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
        .header
        {
            /* 螢幕可視範圍高度的百分比 */
            height: 100vh;
            background-image: url(https://images.unsplash.com/photo-1495249536756-c5348250650c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=794289a3d21b25c02226e9298888b441&auto=format&fit=crop&w=750&q=80);
            /* 盡可能將圖塞在這個網頁 */
            background-size: cover;
            /* 確保圖片從中間向外擴張 */
            background-position: center center;
            /* 讓你的背景呈現固定的狀態 */
            background-attachment: fixed;
        }

        .bg-cover
        {
            background-size: cover;
            background-position: center center;
        }
        .bg-attachment
        {
            background-attachment: fixed;
        }
    </style>
</head>

<body>
<header class="header d-flex justify-content-center align-items-center">
    <div class="text-center ">
        <img src="https://orig00.deviantart.net/abc7/f/2016/074/a/1/welcome__by_tainted_adopts-d9v7sgb.png">
        <h1>This is my web</h1>
        <h2>test some code</h2>
        <a href="#" class="btn btn-outline-info">Get started</a>

    </div>
</header>
<section class="py-5 ">
    <div class="container">
        <h2 class="text-center">ABOUT US</h2>
        <p class="text-center">我們是四個為一組的 勤益科大二年級學生</p>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4814b1a523df63b0acb73e69c5304b5e&auto=format&fit=crop&w=727&q=80"
                     alt="">
            </div>

            <div class="col-md-6">
                <h3>我們嘗試新的程式語言，觀看影片，獲取新的知識與想法</h3>
                <br>
                <br>
                <p>來自勤益資訊管理系，現今已經二年級，在往後的課程中，會學習更多的相關知識，資訊日新月異，永遠都學不完。</p>
                <p>進行初步的程式了解，需要那些相輔相成，對其中的意思進行探討，發展出屬於自己的網頁與程式，在嘗試做得更好。</p>

            </div>

        </div>
    </div>
</section>


<section class="py-5 bg-cover bg-attachment" style="background-image : url(https://images.unsplash.com/photo-1440558547120-1c1cae0397a1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=82d1a8f213b530dbeaeb89931d2382d5&auto=format&fit=crop&w=750&q=80)">
    <div class="container text-white ">
        <h2 class="text-center ">OUR SCHOOL</h2>
        <p class="text-center ">教育無他，榜樣而已</p>
        <div class="row">

            <div class="col-md-4 d-flex">
                <i class="fas fa-rocket fa-4x mr-3"></i>
                <div>
                    <h3>工程學院</h3>
                    <p>工程學院設立宗旨為：促進產業經濟繁榮、落實國家發展政策、培養國家科技人才。</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <i class="fas fa-book fa-4x mr-3"></i>
                <div>
                    <h3>管理學院</h3>
                    <p>（一）創新研發能力。
                        <br>
                        （二）專業實務操作能力。
                        <br>
                        （三）管理專業與溝通表達能力。
                        <br>
                        （四）人文及社會服務關懷之素養。
                        <br>
                        （五）國際外語能力。</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <i class="fas fa-desktop fa-4x mr-3"></i>
                <div>
                    <h3>電資學院</h3>
                    <p>以培養具人文素養、社會關懷、專業知能及具國際視野之術德兼備的企業人才，並發展成為創新導向優質產業科技大學為最大目標。</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex">
                <i class="fas fa-edit fa-4x mr-3"></i>
                <div>
                    <h3>人文創意學院</h3>
                    <p>厚植理論基礎，並強化實務能力
                        提昇教師學術研究，加強國內外學術交流
                        整合教學資源培育優秀管理人才
                        重視通識教育，提昇學生人文素及語言能力</p>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <i class="fab fa-app-store fa-4x mr-3"></i>
                <div>
                    <h3>通識教育學院</h3>
                    <p>國內以往的技職教育由於過度強調專業化的訓練，以至於忽略通識教育在大學教育中的核心功能。近年來隨著社會環境的變遷與高等教育的擴張，當今大學的教育目標已從菁英教育轉為普及教育，社會企業取才也從專業與知識導向，變為能力與態度導向。</p>
                </div>
            </div>

        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
@endsection

