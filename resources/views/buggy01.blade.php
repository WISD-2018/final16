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
                <th scope="col">單價</th>
                <th scope="col">折扣</th>
                <th scope="col">數量</th>
                <th scope="col">小計</th>
            </tr>
            </thead>
            <tbody>
            @php
                $total=0
            @endphp
   @foreach($products as $product )
       @foreach($buggies_info as $buggy_info)
           <tr>
               <th scope="col">{{ $product->find($buggy_info->product_id)->name }}</th>
               <th scope="col">{{ $buggy_info->price }}</th>
               <th scope="col">{{ $buggy_info->discount }}</th>
               <th scope="col">{{ $buggy_info->amount }}</th>
               <th scope="col">{{ $buggy_info->price * (1-$buggy_info->discount) * $buggy_info->amount }}</th>
               @php
               $total= $total + $buggy_info->price * (1-$buggy_info->discount) * $buggy_info->amount
               @endphp
           </tr>
       @endforeach
   @endforeach
        </table>
    </div>

    <div class="container">
        <table class="table table-hover">
            <tr>
                <th scope="col">應付金額</th>
                <th scope="col">{{ $total }}</th>
            </tr>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
            結帳
        </button>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">是否要結帳</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    總共金額是{{ $total }}元
                </div>
                <div class="modal-footer">
                    <form action="/result" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="total" value="{{ $total }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">確定</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection()

