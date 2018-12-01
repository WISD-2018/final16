@extends('layout2.default')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h1 class="page-header" style="text-align: center">會員資訊</h1>
                <table class="table table-hover table-striped">
                    <tbody>
                    <tr>
                        <td>
                            會員編號
                        </td>
                        <td>
                            C8555
                        </td>
                        <td rowspan="3"><img src="{{ URL::asset('images/photo.jpg') }}"></td>
                    </tr>
                    <tr class="table-active">
                        <td>
                            會員生日
                        </td>
                        <td>
                            1968/3/5
                        </td>
                    </tr>
                    <tr class="table-success">
                        <td>
                            紅利點數
                        </td>
                        <td>
                            66點
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td>
                            常用信用卡
                        </td>
                        <td>
                            Master Card
                        </td>
                        <td>
                        </td>

                    </tr>
                    <tr class="table-danger">
                        <td>
                            行動支付
                        </td>
                        <td>
                            Google Pay
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr class="table">
                        <td>
                            <button class="btn btn-primary">回上頁</button>
                        </td>
                        <td></td>
                        <td>
                            <button class="btn btn-primary">修改會員資料</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    @endsection