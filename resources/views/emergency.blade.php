@extends('layout2.default')

@section('content')
    <div class="container">
        <h1 class="page-header">緊急回報</h1>
    </div>

    <div class="container">
        <h3 class="page-header">事件等級</h3>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="AClass" value="A">
                        <label class="form-check-label btn btn-danger" for="AClass">
                            第一級別
                        </label>
                    </div>
                    舉例：會造成顧客生命及財產損害的事項
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="BClass" value="B">
                        <label class="form-check-label btn btn-warning" for="BClass">
                            第二級別
                        </label>
                    </div>
                    舉例：結帳或門市系統相關問題
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="CClass" value="C">
                        <label class="form-check-label btn btn-info" for="CClass">
                            第三級別
                        </label>
                    </div>
                    舉例：操作類相關問題
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#watingModalCenter">
            請求協助
        </button>

        <!-- Modal -->
        <div class="modal fade" id="watingModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">呼叫成功</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        請耐心等候服務人員的到來
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">確定</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>


    @endsection