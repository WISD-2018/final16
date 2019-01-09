@extends('layout2.default')

@section('content')


    <style xmlns="http://www.w3.org/1999/html">
        img{border: none}
        body{background-color: none;max-width:100% ;
            margin: auto; }
        .container{
            font-size: 62.5%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            position: relative;
            max-width: 100%;
            margin: auto;
            padding: 10px;
        }

        #name li{
            display:inline;
            list-style-position:outside;
            margin: -10%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
        }
        #info li{
            display:inline;
            list-style-position:outside;
            border:1px #c4e3f3 solid;
            padding: 0px;
            margin:0;
            font-size: 100%;
            font-family: cwTeXYen,Arial,FreeSans,Arimo,"微軟正黑體","Microsoft JhengHei","Droid Sans",Helvetica,sans-serif;
            color: #777777;
        }
        input[type="text"]{
            border: 0 none;
            background-color: transparent;
            width: 50px;
            font-size: 18px;
            color: #777777;
            font-family: "微軟正黑體";
            text-align: center;
        }
    </style>
    <script>
        function ajaxget()
        {
            $.ajax({
                type: 'get',
                url: '{{ url('buggy/admin/'.$buggies_id) }}',
                dataType: 'Json',
                success: function (data) {


                    // var product_id=[];
                    var amount=[];
                    var img=[];

                    var name=[];
                    var price=[];

                    var len=(data.length)/2;

                    for (i = 0; i < len; i++) {
                        amount.push(data[i].amount);

                    }

                    for (i =len ; i < data.length ; i++){
                        name.push(data[i].name);
                        price.push(data[i].price);
                        img.push(data[i].img);
                    }
                    console.log(amount,img,price,name);


                    var str="";
                    var total=0;

                    for (i = 0; i < len; i++){
                        total+=price[i]*amount[i];
                        str +="<tr>"+"<td>" +
                            "<div class=\"container\">\n" +
                            "                    <div class=\"row\">\n" +
                            "                        <div class=\"col-4\">\n" +
                            "                            <a href="+img[i]+"\n" +
                            "                               target=\"_blank\">\n" +
                            "                                <img class=\"img-fluid\" src="+img[i]+">\n" +
                            "                            </a>\n" +
                            "                        </div>\n" +
                            "                        <div class=\"col-8\">\n" +
                            "                            <table class=\"table-borderless\">\n" +
                            "                                <tr align=\"left\" valign=\"center\">\n" +
                            "                                    <td>\n" +
                            "                                        <p style=\"color:#666;font-size:18pt;text-decoration:none;border: 0px\" >\n" +
                                                                        name[i]+"</p>\n" +
                            "                                        <input style=\"font-weight:bold;\" type=\"text\" disabled=\"disabled\";  value=\"單價\"/>\n" +
                            "                                        <input style=\"font-weight:bold;\" type=\"text\" disabled=\"disabled\";  value=\"數量\"/>\n" +
                            "                                        <input style=\"font-weight:bold;\" type=\"text\" disabled=\"disabled\";  value=\"小計\"/><br>\n" +
                            "                                        <input style=\"color: #1b4b72\" type=\"text\" disabled=\"disabled\";  value="+price[i]+">"+"\n" +
                            "                                        <input style=\"color: #1b4b72\" type=\"text\" disabled=\"disabled\";  value="+amount[i]+">\n" +
                            "                                        <input style=\"color: #1b4b72\" type=\"text\" disabled=\"disabled\";  value="+price[i]*amount[i]+">\n" +
                            "                                    </td>\n" +
                            "                                </tr>\n" +
                            "                            </table>\n" +
                            "                        </div>\n" +
                            "                    </div>\n" +
                            "                </div>\n" +
                            "            </td>"+"</tr>"
                    }


                    document.getElementById("tbody_result").innerHTML= str;
                    document.getElementById("total").innerHTML=total;
                    document.getElementById("total1").innerHTML=total;
                    document.getElementById("total2").value=total;
                }
            });
        }
    </script>
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
            // JSON.stringify(data)+
            alert('購物籃已更新~');
            ajaxget();
        });

    </script>

    <body onload="ajaxget()">

    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col"> <h1 style="text-align: center" class="page-header"><b>購物車清單</b></h1></th>
        </tr>
        </thead>
        <tbody id="tbody_result">
        </tbody>
    </table>


    <div class="container-sm">
        <div align="right" class="row align-items-end"style="margin: 0">
            <div class="col-7"><span><h5>應付金額</h5></span></div>
            <div class="col-4"><span><h4 id =total></h4></span></div>
        </div>
    </div>
    <div align="center" style="margin-top: 10%">
    <span>
        <button type="button" class="btn btn-primary" style="width:70%;height:40px;font-size:100%;" data-toggle="modal" data-target="#exampleModal">
            結帳
        </button>
    </span>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">是否要結帳</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    總共金額是<h3 id =total1></h3>元
                </div>
                <div class="modal-footer">
                    {{--<form action="/buggy/{{$member_id}}/{{$buggies_id}}/waitfor" method="POST">--}}
                    <form action="/buggy/waitfor" method="POST">
                        {{ csrf_field() }}
                        <input id="total2" type="hidden" name="total" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">確定</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>



@endsection()

