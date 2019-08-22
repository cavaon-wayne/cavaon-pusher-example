<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" id="title">Laravel 5 - Pusher - Client</div>
            </div>
        </div>
        <script src="https://unpkg.com/socket.io-client@2.1.1/dist/socket.io.js"></script>
        <script>
            var socket = io('{{$wsHostURL}}',{
                rememberUpgrade:true,
                query:{
                    channel:"pusher-client-server-created",
                    token:"{{$token}}"
                },
            });

            socket.on({!! json_encode(App\Events\ServerCreated::class) !!}, function(data){
                //Will showing an json string {bid:1100,time:'2018-08-22 01:30:00'}
                var a=document.getElementById("title");
                a.innerHTML=data;
                console.log(data);
                console.log(typeof data);
            });

            var socket2 = io('{{$wsHostURL}}',{
                rememberUpgrade:true,
                query:{
                    channel:"my-testing-channel",
                    token:"{{$token}}"
                },
            });

            socket2.on('my-testing-event', function(data){
                console.log(data);
                console.log(typeof data);
                var a=document.getElementById("title");
                a.innerHTML=data;
            });
        </script>
    </body>
</html>
