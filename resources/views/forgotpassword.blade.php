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

    <body style="background-color:#FFFFFF;">

        <div class="wrapper" id="signup-container">
            <div class="signup-header">
                <a href="{{ url('/') }}">
                    <img src="{{asset('img/classmade-logo.png')}}" alt="Login Logo">
                </a>
            </div>

            <div class="container">
                <div class="content">
                    <form method="POST" action="{{ route('register') }}" class="form-default forgot-password-form">
                        {{ csrf_field() }}
                        <label style="">Email</label>
                        <input type="text" name="first_name" class="error" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? 'has-error' : '' }}" required autofocus>
                        <span class="msg-error">{{ $errors->first('first_name') }}</span>


                        <div class="forgot-password-buttons">
                            <a href="#" type="submit" class="btn btn-primary send-reset">Send reset email</a>
                            <a href="#" type="submit" class="btn ghost-button cancel">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    <script src="{{{ asset('js/app.js') }}}"></script>
    </body>
</html>
