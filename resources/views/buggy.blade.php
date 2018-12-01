@extends('layout2.default')

@section('content')

    <style>
        #B li{
            display:inline;
            width: 30%;
            float:left;
            text-align:center;
            font-size:20px;
        }
    </style>
    <div class="container">
        <h1 class="page-header"><div style="text-align:center;font-family:微軟正黑體;">購物車清單</div></h1>
    </div>

    <div class="container-fluid">
        <table class="table table-hover ">
            <thead class="thead-light">
            <tr>
                <th scope="col" style="font-size:20px;">商品名稱</th>
                <th scope="col">
                    <ul id="B">
                        <li>數量</li>
                        <li>單價</li>
                        <li>小計</li>
                    </ul>
                </th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach($data)--}}
            <tr>
                <th scope="row">
                    <a href="https://www.obdesign.com.tw/product.aspx?seriesID=DA6205-"
                         style="color:#666;text-decoration:none;" target="_blank">
                    <img border="0" src="https://image.obdesign.com.tw/catalog/170801xxx/DA6205-L.jpg" height="125px" width="125px">不易皺後蝴蝶結吊帶洋裝</a>
                </th>
                <td >
                    <div style="margin-top:15%;">
                        <ul id="B">
                            <li>1</li>
                            <li>$8788</li>
                            <li>$8788</li>
                        </ul>
                    </div>
                </td>
            </tr>
            {{--@endforeach--}}
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row align-items-end"style="margin-left:45%;">
            <div class="col"><span><h4>應付金額</h4></span></div>
            <div class="col"><span><h5>$8788</h5></span></div>
            <div class="col;"><span>
                   <button type="button" class="btn btn-primary" style="width:160px;height:45px;font-size:20px;">
                       結帳
                   </button>
                </span></div>
        </div>
    </div>












@endsection()

