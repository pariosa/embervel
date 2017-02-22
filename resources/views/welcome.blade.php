<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peter Ariosa</title>
        <script>window.Laravel = <?php echo json_encode(['csrf_token'=>csrf_token(),]);?></script> 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" src="css/app.css"/>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           {{-- @if (Route::has('login')) --}}
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
           {{-- @endif--}}

            <div class="content">
                <div class="title m-b-md">
                    Peter Ariosa
                </div>
                <h3>developer, artist, musician</h3>

                <div class="links">
                    <a href="https://soundcloud.com/ariosa">Original Music</a>
		    <a href="https://Facebook.com/ariosap">Facebook</a>
		    <a href="https://grimeethics.net">Radio Station</a>
                    <a href="https://ghettoblasting101.tumblr.com">Music Library</a>
                    <a href="https://twitter.com/w0xy_">Twitter</a>
                    <a href="https://github.com/pariosa">Github</a>
                </div>
		<br><br><br>
		<div id="app">
                <example></example>
                 </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
