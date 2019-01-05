<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">

         <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('72a503cd4d1e66357b14', {
            cluster: 'eu',
            forceTLS: true
        });

        var channel = pusher.subscribe('mychannel{{$member_id}}');
        channel.bind('App\\Events\\ShoppingStatusUpdate', function(data) {
            alert(JSON.stringify(data));
        });

    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>
</body>
