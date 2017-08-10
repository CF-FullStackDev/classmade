@extends('layouts.app')

@section('content')
<span id="modal-login-error">{{ $errors->first('email').$errors->first('password') }}</span>

<div class="login-bg">
    <div class="caption">
        <span class="header">Your career starts here</span>
    </div>
</div>

<div class="login-panel">
    <div class="content">
        <span>Connect with your classmates, teachers, and<br> schools all over the world on Classmade</span>
        <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister </p>
        <img src="{{asset('img/login-section.png')}}">
        <span>Join Go Join. Now join in.<br>Share your potfolio connect with your classmates and many more</span>
        <a href="{{ route('register') }}" style=""><button class="btn btn-primary">Sign up</button></a>
    </div>
</div>

<div class="modal-dialog">
    <div class="modal-body" id="modal-login">
        <div class="content">
            <div class="login-panel">
                <span class="header">Sign in</span>
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <label class="font-extraLight">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'has-error' : '' }}">
                    <span class="msg-error">{{ $errors->first('email') }}</span>

                    <label class="font-extraLight password">Password</label>
                    <input type="password" name="password" class="{{ $errors->has('password') ? 'has-error' : '' }}">
                    <span class="msg-error">{{ $errors->first('password') }}</span>

                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a href="#">Forgot password?</a>
                    <span class="sub-text">By signing in, you agree to our Terms of Use.</span>
                </form>
            </div>
            <img src="{{asset('img/login-modal.png')}}">
        </div>
        <a class="btn close-modal" data-modal="#modal-login" href="#">+</a>
    </div>
</div>
@endsection
