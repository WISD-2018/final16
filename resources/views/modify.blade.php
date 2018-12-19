@extends('layout2.default')

@section('content')

    <div class="container-fluid" >
        <div class="row">

            <div class="col-md-3">
            </div>
            <div class="col-md-offset-6 ">

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
                        <td rowspan="3">
                            <form action="/member/upload/img" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <img id="preview_progressbarTW_img" class="img-responsive" src="{{ URL::asset($member->img) }}"  width="200"/>
                                <input name="photo" type="file" id="imgInp" accept="image/gif, image/jpeg, image/png" ><br>
                                <button type="submit">上傳</button>
                            </form>
                        </td>
                    </tr>
                    <form action="/member/modify" method="POST">
                        {{ csrf_field() }}
                    <tr class="table-active">
                        <th>
                            會員姓名
                        </th>
                        <td>
                            <input type="text" class="form-control" required="required" name="name" value="{{ $member->name }}">
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th>
                            會員生日
                        </th>
                        <td>
                            <input type="date" class="form-control" required="required" name="birthday" value="{{ $member->birthday }}">
                        </td>
                    </tr>

                    <tr class="table-danger">
                        <th>
                            會員電話
                        </th>
                        <td colspan="2">
                            <input type="tel" class="form-control" required="required" name="phone" value="{{ $member->phone}}">
                        </td>
                    </tr>
                    <tr class="table-info">
                        <th>
                            會員信箱
                        </th>
                        <td colspan="2">
                            <input type="email" class="form-control" required="required" name="email" value="{{ $member->email}}">
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
                    <tr class="table-success">
                        <td colspan="2" style="text-align: right">
                            <button class="btn btn-primary" onclick="history.back()" >回到上頁</button>

                        </td>
                        <td colspan="2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                修改資料
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">是否修改資料</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        異動項目如下:
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">確定</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
        $("#imgInp").change(function(){
            //當檔案改變後，做一些事
            readURL(this);   // this代表<input id="imgInp">
        });

        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#preview_progressbarTW_img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection