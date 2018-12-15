@extends('layout2.default')

@section('content')


    <style>
        img{border: none}
        body{background-color: none;max-width:100% ;
            margin: auto; }
        .container{
            font-size: 62.5%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            position: relative;
            max-width: 100%;
            margin: auto;
            padding: 10px;
        }

        #name li{
            display:inline;
            list-style-position:outside;
            margin: -10%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
        }
        #info li{
            display:inline;
            list-style-position:outside;
            border:1px #c4e3f3 solid;
            padding: 0px;
            margin:0;
            font-size: 100%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            color: #777777;
        }
        input[type="text"]{
            border: 0 none;
            background-color: transparent;
            width: 50px;
            font-size: 18px;
            color: #777777;
            font-family: "微軟正黑體";
            text-align: center;
        }
    </style>
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
                                        <p style="color:#666;font-size:18pt;text-decoration:none;border: 0px" >
                                            aaaaaaaaaaaaa</p>
                                        <input style="font-weight:bold;" type="text" disabled="disabled";  value="單價"/>
                                        <input style="font-weight:bold;" type="text" disabled="disabled";  value="數量"/>
                                        <input style="font-weight:bold;" type="text" disabled="disabled";  value="小計"/><br>
                                        <input style="color: #1b4b72" type="text" disabled="disabled";  value="8788"/>
                                        <input style="color: #1b4b72" type="text" disabled="disabled";  value="1"/>
                                        <input style="color: #1b4b72" type="text" disabled="disabled";  value="8788"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        </tbody>
    </table>


    <div class="container-sm">
        <div align="right" class="row align-items-end"style="margin: 0">
            <div class="col-7"><span><h5>應付金額</h5></span></div>
            <div class="col-4"><span><h4>$8788</h4></span></div>
        </div>
    </div>
    <div align="center" style="margin-top: 10%">
    <span>
           <button type="button" class="btn btn-primary" style="width:70%;height:40px;font-size:100%;">
               <b>結帳</b>
           </button>
    </span>
    </div>



@endsection()

