@extends('layout2.default')

@section('content')

    <div class="container">
        <h1 class="page-header"><div style="text-align:center;">購物車清單</div></h1>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">商品名稱</th>
                <th scope="col">數量</th>
                <th scope="col">單價</th>
                <th scope="col">小計</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row align-items-end">
            <div class="col"><span>應付金額</span></div>
            <div class="col"><span>$8788</span></div>
            <div class="col"><span>
                    <button>
                        結帳
                    </button>
                </span></div>
        </div>
    </div>
@endsection()

