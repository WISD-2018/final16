@extends('layout2.default')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-offset-6">
                <h1 class="page-header" style="text-align: center">會員資訊</h1>
                <table class="table table-hover table-striped table-responsive">
                    <tbody>
                    <tr>
                        <th>
                            會員編號
                        </th>
                        <td>
                            {{ $member->id }}
                        </td>
                        <td rowspan="3"><img class="img-responsive" src="{{ URL::asset($member->img) }}"  width="200"></td>
                    </tr>
                    <tr class="table-active">
                        <th>
                            會員姓名
                        </th>
                        <td>
                            {{ $member->name }}
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th>
                            會員生日
                        </th>
                        <td>
                            {{ $member->birthday }}
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <th>
                            紅利點數
                        </th>
                        <td colspan="2">
                            {{ $member->points}}點
                        </td>
                    </tr>
                    <tr class="table-danger">
                        <th>
                            會員電話
                        </th>
                        <td colspan="2">
                            {{ $member->phone}}
                        </td>
                    </tr>
                    <tr class="table-info">
                        <th>
                            會員信箱
                        </th>
                        <td colspan="2">
                            {{ $member->email}}
                        </td>
                    </tr>
                    <tr class="table-active">
                        <th>
                            付款方式
                        </th>
                        <td colspan="2">
                            @foreach($payments as $payment)
                                <a href="" data-toggle="tooltip" title="{{ substr($payment->key,0,4) }}-****-****-****">{{ $payment->payments }}</a><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr class="table-info">
                        <th>
                           消費紀錄
                        </th>
                        <td colspan="2">
                            @foreach($sales as $sale)
                                @php
                                    $total=0
                                @endphp
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $sale->id }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#{{ $sale->id }}" aria-expanded="true" aria-controls="{{ $sale->id }}">
                                                    {{ $sale->date.' '.$sale->time }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="{{ $sale->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table table-hover table-responsive">
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
                                                @foreach($sales_info->where('sales_id',$sale->id)->get() as $sale_info)
                                                    <tr class="table-active">
                                                        <th scope="col">{{ $name=$products->where('id',$sale_info->product_id)->first()->name }}</th>
                                                        <th scope="col">{{ $price=$products->where('id',$sale_info->product_id)->first()->price }}</th>
                                                        <th scope="col">
                                                            @php
                                                                $discount=$products->where('id',$sale_info->product_id)->first()->discount;
                                                                if ($discount!=0){
                                                                echo ((1-$discount)*10).'折';
                                                                }
                                                             @endphp
                                                        </th>
                                                        <th scope="col">{{ $amount=$sale_info->amount }}</th>
                                                        <th scope="col">{{ $t=$price*(1-$discount)*$amount}}
                                                        </th>
                                                    @php
                                                        $total=$total+$t
                                                    @endphp
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th scope="col">應付金額</th>
                                                        <th scope="col">{{ $total }}</th>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    <tr class="table-success">
                        <td colspan="2" style="text-align:right">
                            <button class="btn btn-primary" onclick="history.back()">回到上頁</button>

                        </td>

                        <td colspan="2">
                            <button class="btn btn-primary" onclick="javascript:location.href='/member/modify'">修改資料</button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>



    @endsection

@section('script')
    <script>
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
@endsection
