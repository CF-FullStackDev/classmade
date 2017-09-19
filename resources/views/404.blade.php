<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Classmade</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body id="app-other">
        <div class="wrapper">
            <nav>
                <div>
                    <a href="{{ url('/') }}">
                        <img class="classmade-logo-other" src="{{asset('img/classmade-logo.png')}}" alt="Classmade">
                    </a>
                </div>
            </nav>

            <div id="container" class="portfolio-single" style="margin-top:150px;">
                <div id="content">
                     <div class="page-404-wrapper">
                         <img src="{{asset('img/404-image.png')}}">
                         <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymph</p>
                     </div>
                </div>
            </div>

            <footer>
                <div>
                    <ul>
                        <li>Privacy</li>
                        <li>Terms</li>
                        <li>Advertising</li>
                        <li>Ad Choices</li>
                        <li>Cookies</li>
                        <li>Classmade @2017</li>
                    </ul>
                </div>
            </footer>

        </div>

    <script src="{{{ asset('js/app.js') }}}"></script>
    </body>
</html>
