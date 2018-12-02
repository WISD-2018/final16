@extends('layout2.default')

@section('content')

    <style>
        #GG li{
            display:inline;
        }
    </style>

    <div class="container-sm">
        <h1 class="page-header"><div style="text-align:center;font-family:微軟正黑體;">購物車清單</div></h1>
        <div class="container">

            <ul id="GG">
                <li class="name">商品名稱</li>
                <li class="detail">單價</li>
                <li class="detail">小計</li>
            </ul>
            <span id="DataList1">
	<span>
		<ul id="GG">
			<li class="name-2" style="height: 120px;"><a href="https://www.obdesign.com.tw/product.aspx?seriesID=DA6205-" style="color:#666;text-decoration:none;" target="_blank"><img border="0" src="https://image.obdesign.com.tw/catalog/170801xxx/DA6205-L.jpg" class="pro-img">不易皺後蝴蝶結吊帶洋裝</a></li>
			<li class="detail-2">NT$449</li>
			<li class="detail-2 TotalPrice">NT$449</li>
			</li>
		</ul>
	</span>
</span>


        </div>



    <div class="container-sm">
        <div class="row align-items-end"style="margin-left:10%;">
            <div class="col"><span><h5>應付金額</h5></span></div>
            <div class="col"><span><h5>$8788</h5></span></div>
            <div class="col"><span>
                   <button type="button" class="btn btn-primary" style="width:60%;height:5%;font-size:20%;">
                       <b>結帳</b>
                   </button>
                </span></div>
        </div>
    </div>



@endsection()


