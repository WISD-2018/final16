@extends('layout2.default')

@section('content')
    <div id="app">
        <qrcode-reader></qrcode-reader>
    </div>
    @endsection

@section('script')
    <script src="{{ mix('js/app.js') }}"></script>
    @endsection

