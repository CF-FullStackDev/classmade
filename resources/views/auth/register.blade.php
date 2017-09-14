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
                    <form method="POST" action="{{ route('register') }}" class="form-default">
                        {{ csrf_field() }}
                        <label style="">First Name</label>
                        <input type="text" name="first_name" class="error" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? 'has-error' : '' }}" required autofocus>
                        <span class="msg-error">{{ $errors->first('first_name') }}</span>

                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? 'has-error' : '' }}" required>
                        <span class="msg-error">{{ $errors->first('last_name') }}</span>

                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'has-error' : '' }}" required>
                        <span class="msg-error">{{ $errors->first('email') }}</span>

                        <label>Password</label>
                        <input type="password" name="password" class="{{ $errors->has('password') ? 'has-error' : '' }}" required>
                        <span class="msg-error">{{ $errors->first('password') }}</span>

                        <label>Retype Password</label>
                        <input type="password" name="password_confirmation" required>

                        <label>Student Authentication</label>
                        <div class="select-default" name="authentication">
                            <select id="authentication-select" name="verification_type" required>
                                <option value="Student Email" selected>Student Email</option>
                                <option value="Student ID">Student ID</option>
                                <option value="School Authentication Email">School Authentication Email</option>
                            </select>
                        </div>
                        {{ $errors->first('verification_type') }}

                        <input type="text" name="verification_content" style="display:none;">

                        <div class="auth-options" id="auth-school-email">
                            <label>School Email</label>
                            <input type="email" name="school_email">
                        </div>

                        <div class="auth-options" id="auth-personal-email">
                            <label>Student ID</label>
                            <div class="upload-default">
                                <span>Upload Student ID Card</span>
                                <img src="{{asset('img/icons/upload_icon2.png')}}">
                            </div>
                            <input type="file" id="profile-file-id" name="school_id" accept="image/*" hidden>
                        </div>

                        <div class="g-recaptcha-container {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                            {!! app('captcha')->display(); !!}
                        </div>
                        <span class="msg-error">{{ $errors->first('g-recaptcha-response') }}</span>

                        <div class="form-checkbox">
                            <input type="checkbox" required>
                            <label class="" for="terms">By signing up, you agree to our <a href="#">Terms of Services</a>,<br> including <a href="#">Cookie Use</a>.</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign up</button>

                        <span>
                            Already have an account? <a href="{{ url('login') }}">Sign In</a>
                        </span>
                    </form>
                </div>
            </div>
        </div>

    <script src="{{{ asset('js/app.js') }}}"></script>
    </body>
</html>
