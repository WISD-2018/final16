@extends('layout2.default')

@section('content')



    <style>
        div {
            margin: 0;
            padding: 0;
            width: 100%;
            font-size: 62.5%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            position: relative;
        }

        #name li{
            display:inline;
            list-style-position:outside;
            margin-left: -18%;
            border:1px #c4e3f3 solid;

            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
        }
        #info li{
            display:inline;
            list-style-position:outside;
            border:1px #c4e3f3 solid;
            margin-right:50px;
            font-size: 80%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            color: #777777;
        }
    </style>
    <div class="container-sm">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col"> <h1 style="text-align: center" class="page-header"><b>購物車清單</b></h1></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <a href="https://www.obdesign.com.tw/product.aspx?seriesID=DA6205-"
                               target="_blank">
                                <img class="img-fluid" src="https://image.obdesign.com.tw/catalog/170801xxx/DA6205-L.jpg">
                            </a>
                        </div>
                        <div class="col-8">
                            <table class="table-borderless">
                                <tr align="left" valign="center">
                                    <td>
                                        <ul id="name" class="list-inline">
                                            <li class="list-inline-item"style="color:#666;font-size:18px;text-decoration:none;border: 0px" >
                                                aaaaaaaaaaaaaaaaaaaa</li><br>
                                            <ul id="info">
                                                <li style="border: 0px"><b>單價</b></li>
                                                <li style="border: 0px"><b>數量</b></li>
                                                <li style="border: 0px"><b>小計</b></li><br>
                                                <li style="color: black">$8788</li>
                                                <li style="color: black">1</li>
                                                <li style="color: black">$8788</li>

                                            </ul>
                                        </ul>
                                    </td>
                            </table>
                        </div>
                    </div>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <a href="https://www.obdesign.com.tw/product.aspx?seriesID=DA6205-"
                                   target="_blank">
                                    <img class="img-fluid" src="https://image.obdesign.com.tw/catalog/170801xxx/DA6205-L.jpg">
                                </a>
                            </div>
                            <div class="col-8">
                                <table class="table-borderless">
                                    <tr align="left" valign="center">
                                        <td>
                                            <ul id="name" class="list-inline">
                                                <li class="list-inline-item"style="color:#666;font-size:18px;text-decoration:none;border: 0px" >
                                                    aaaaaaaaaaaaaaaaaaaa</li><br>
                                                <ul id="info">
                                                    <li style="border: 0px"><b>單價</b></li>
                                                    <li style="border: 0px"><b>數量</b></li>
                                                    <li style="border: 0px"><b>小計</b></li><br>
                                                    <li style="color: black">$8788</li>
                                                    <li style="color: black">1</li>
                                                    <li style="color: black">$8788</li>

                                                </ul>
                                            </ul>
                                        </td>
                                </table>
                            </div>
                        </div>
                    </div>

                </td>



            </tr>


            </tbody>


        </table>

    </div>



    <div class="container-sm">
        <div class="row align-items-end"style="margin-left:10%;">
            <div class="col"><span><h5>應付金額</h5></span></div>
            <div class="col"><span><h5>$8788</h5></span></div>
            <div class="col"><span>
                   <button type="button" class="btn btn-primary" style="width:70%;height:5%;font-size:20%;">
                       <b>結帳</b>
                   </button>
                </span></div>
        </div>
    </div>



@endsection()



        {{--<tr>--}}
            {{--<td width="40%">--}}
                {{--<a href="https://www.obdesign.com.tw/product.aspx?seriesID=DA6205-"--}}
                   {{--style="color:#666;text-decoration:none;" target="_blank">--}}
                    {{--<img border="0" src="https://image.obdesign.com.tw/catalog/170801xxx/DA6205-L.jpg" style="width: 100%">--}}
                {{--</a>--}}
            {{--</td>--}}
            {{--<td width="30%">--}}
                {{--不易皺後蝴蝶結吊帶洋裝--}}
            {{--</td>--}}

            {{--<td width="10%" align="center"valign="center">100</td>--}}
            {{--<td width="10%" align="center"valign="center">100</td>--}}
            {{--<td width="10" align="center"valign="center">100</td>--}}


        {{--</tr>--}}

