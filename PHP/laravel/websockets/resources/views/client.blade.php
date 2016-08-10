<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5 | WebSockets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row ">
        <div class="col-xs-12">
            <br/>
            <input type="text" id="input" placeholder="Message…"/>
            <hr/>
            <pre id="messages">
            </pre>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    //The homestead or local host server (don't forget the ws prefix)
    var host = 'ws://localhost:8889';
    var socket = null;
    var input = document.getElementById('input');
    var messages = document.getElementById('messages');
    var print = function (message) {
        var samp = document.createElement('samp');
        samp.innerHTML = '\n' + message + '\n';
        messages.appendChild(samp);
        return;
    };

    //Manges the keyup event
    input.addEventListener('keyup', function (evt) {
        if (13 === evt.keyCode) {
            var msg = input.value;
            if (!msg)
                return;
            try {
                //Send the message to the socket
                socket.send(msg);
                input.value = '';
                input.focus();
            } catch (e) {
                console.log(e);
            }
                print(msg);
            return;
        }
    });

    try {
        socket = new WebSocket(host);

        //Manages the open event within your client code
        socket.onopen = function () {
            print('Connection Opened');
            input.focus();
            return;
        };
        //Manages the message event within your client code
        socket.onmessage = function (msg) {
            print(msg.data);
            return;
        };
        //Manages the close event within your client code
        socket.onclose = function () {
            print('Connection Closed');
            return;
        };
    } catch (e) {
        console.log(e);
    }
</script>
</body>
</html>
