@extends('layout2.default')

@section('content')
    <div class="container">
        <form>
            <div><h3 class="page-header">聯絡資訊</h3></div>
            <div class="form-group row">
                <label for="CustomName" class="col-sm-2 col-form-label">顧客姓名</label>
                <div class="col-sm-10">
                    <input type="text" required="required" class="form-control" id="CustomName" value="大橋頭營運長">
                </div>
            </div>
            <div class="form-group row">
                <label for="CustomE-mail" class="col-sm-2 col-form-label">電子郵件</label>
                <div class="col-sm-10">
                    <input type="email" required="required" class="form-control" id="CustomE-mail" value="rememberoh@gmail.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="CustomPhone" class="col-sm-2 col-form-label">電話號碼</label>
                <div class="col-sm-10">
                    <input type="tel" required="required" class="form-control" id="CustomPhone" value="0987978269">
                </div>
            </div>

            <div class="form-group">
                <label for="MessageType">訊息類別</label>
                <select class="form-control" id="MessageType">
                    <option>商品問題</option>
                    <option>購物流程</option>
                    <option>賣場動線</option>
                    <option>系統問題</option>
                    <option>其他</option>
                </select>
            </div>
            <h3>回饋訊息</h3>
            <div class="form-group">
                <label for="FeedbackContent" class="col-form-label">標題</label>
                <input type="text" required="required" class="form-control" id="FeedbackContent">
                <label for="FeedbackContent">內容</label>
                <textarea class="form-control" id="FeedbackContent" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-2">確認送出</button>
        </form>
    </div>



    @endsection()