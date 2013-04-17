<!HTML>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#tweetForm').submit(function (){
                    $.ajax({
                        type: "POST",
                        data : $(this).serialize(),
                        url: "postToTwitter.php",
                        success: function(data){
                            $("#results").html(data);
                            //alert(data);
                        }
                    });
                    return false;
                });
            });
        </script>

        <style>
            body {
                background: #a1dbff;
                background: -moz-linear-gradient(top,  #a1dbff 0%, #cbebff 47%, #f0f9ff 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a1dbff), color-stop(47%,#cbebff), color-stop(100%,#f0f9ff));
                background: -webkit-linear-gradient(top,  #a1dbff 0%,#cbebff 47%,#f0f9ff 100%);
                background: -o-linear-gradient(top,  #a1dbff 0%,#cbebff 47%,#f0f9ff 100%);
                background: -ms-linear-gradient(top,  #a1dbff 0%,#cbebff 47%,#f0f9ff 100%);
                background: linear-gradient(to bottom,  #a1dbff 0%,#cbebff 47%,#f0f9ff 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a1dbff', endColorstr='#f0f9ff',GradientType=0 );

            }
            #main {
                width: 400px;
                height: 200px;
                margin-left: 50%;
                margin-top: 5%;
                left: -200px;
                position: absolute;
                padding: 20px;
                text-align: center;

                background: #87e0fd;
                background: -moz-linear-gradient(top,  #87e0fd 0%, #53cbf1 40%, #05abe0 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#87e0fd), color-stop(40%,#53cbf1), color-stop(100%,#05abe0));
                background: -webkit-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%);
                background: -o-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%);
                background: -ms-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%);
                background: linear-gradient(to bottom,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#87e0fd', endColorstr='#05abe0',GradientType=0 );

                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;

                -moz-box-shadow: 3px 3px 4px #000;
                -webkit-box-shadow: 3px 3px 4px #000;
                box-shadow: 3px 3px 4px #000;

            }
            #main #header {
                font-family: 'Days One', sans-serif;
                font-size: 25px;
                border-bottom-style: solid;
                border-bottom-width: 2px;
                border-bottom-color: #000;
                margin-bottom: 50px;
            }
            #main #details {
                margin-top: 50px;
                font-size: small;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <div id="header">
                Welcome to twitter post
            </div>
            <form method='POST' id='tweetForm' action='index.php'>
                <input type='text' placeholder='Enter tweet here' name='tweet' id='tweet'/>
                <input type='submit'/>
            </form>
            <div id="results">
                
            </div>
            <div id="details">
                <a href="https://github.com/michaelschem/twitterPlugin">Code and Documentation</a>
            </div>
        </div>

    </body>
</html>
