@extends('layout2.default')

@section('content')
    <div class="container">
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
                        <td rowspan="3"><img src="{{ URL::asset($member->img) }}"></td>
                    </tr>
                    <tr class="table-active">
                        <th>
                            會員姓名
                        </th>
                        <td>
                            {{ $member->name }}
                        </td>
                    </tr>
                    <tr class="table-condensed">
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
                    <tr class="table-success">
                        <th>
                            會員電話
                        </th>
                        <td colspan="2">
                            {{ $member->phone}}
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th>
                            會員信箱
                        </th>
                        <td colspan="2">
                            {{ $member->email}}
                        </td>
                    </tr>
                    <tr class="table-danger">
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
                        <td colspan="2">
                            <button class="btn btn-primary" onclick="history.back()">回到上頁</button>

                        </td>

                        <td colspan="2">
                            <button class="btn btn-primary">修改資料</button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        2017-08-01
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    內容
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
