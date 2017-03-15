
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" >
            <div id="messages" ></div>
        </div>
    </div>
    <script>
        var socket = io.connect('http://localhost:8890');
        socket.on('message', function (data) {
            $( "#messages" ).append( "<p>"+data+"</p>" );
        });
    </script>
