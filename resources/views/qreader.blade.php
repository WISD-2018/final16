@extends('layout2.default')

@section('content')
    <div id="app">
        {{ csrf_field() }}
        <qrcode-reader></qrcode-reader>
    </div>
    @endsection

@section('script')
    <script src="{{ mix('js/app.js') }}"></script>
    @endsection

