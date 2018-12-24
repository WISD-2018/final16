@extends('layout2.default')

@section('content')
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate(Request::url().'/blending'); !!}
        <p>Scan me to return to the original page.</p>
    </div>
    @endsection