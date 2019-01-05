@extends('layout2.default')

@section('content')
    <style>body{
            max-width:100%;margin: auto;
            background-image:URL({{URL::asset('images/buggies/waitfor1.png')}});
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: 80%;
        }
    </style>

    <body>
    <div style="">
        <div align="center" style="margin-top: 10%">
    <span>
        <button type="button" class="btn btn-success" style="text-align:left;width:70%;height:40px;font-size:100%;" data-toggle="modal" data-target="#exampleModal">
            <=繼續購物
        </button>
    </span>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">要再回頭逛逛嗎?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 id =total1>若按是，可瀏覽購物車</h3>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('/buggy') }}'">確定</button>
                    </div>

                    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
                    <meta name="csrf-token" content="{{csrf_token()}}">
                    <script>
                        // Enable pusher logging - don't include this in production
                        Pusher.logToConsole = true;

                        var pusher = new Pusher('72a503cd4d1e66357b14', {
                            cluster: 'eu',
                            forceTLS: true
                        });

                        var channel = pusher.subscribe('checkout{{$member_id}}');
                        channel.bind('App\\Events\\CheckOut', function(data) {
                            // JSON.stringify(data)+
                            alert('已經結帳完成，謝謝光臨~');
                            document.location.href="/buggy/checkout";
                        });

                    </script>
                </div>
            </div>
        </div>

   </div>
    </body>

@endsection()
