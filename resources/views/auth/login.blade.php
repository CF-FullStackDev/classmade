@extends('layouts.app')

@section('content')
<span id="modal-login-error">{{ $errors->first('email').$errors->first('password') }}</span>

<!-- <div class="login-bg">
    <div class="caption">
        <span class="header">Your career starts here</span>
    </div>
</div> -->

<div class="video-bg">
    <video autoplay loop>
          <source src="{{ url('videos/hero-cm-intro2-1080.mp4') }}" type="video/mp4">
    </video>
    <div class="caption">
        <span class="header">Your career starts here</span>
    </div>
</div>

<div class="login"></div>

<section class="white-background">
    <div class="login-video-panel">
        <div class="text-content">
            <span>Connect with your classmates, teachers, and schools all over the world on Classmade</span>
            <p> Discover and connect with your fellow students from all over the world with Classmade. </p>
        </div>
        <video width="320" height="240" controls>
          <source src="{{ url('videos/cm-introvid-draft6.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div>
</section>

<section class="blue-background">
    <div class="signup-panel">
        <div class="content">
            <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.</span>
            <a href="{{url('/signup')}}" class="btn btn-primary">Sign Up</a>
        </div>
        <img src="{{ asset('img/final/login-image.png')}}">
    </div>
</section>

<section class="white-background">
    <div class="demo-tutorial-panel">
        <h2 class="title">Need some Tutorial Teacher?</h2>
        <div class="panel left-panel">
            <img src="{{asset('img/final/demo-login.png')}}">
            <span>demo version</span>
            <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister </p>
            <a href="{{url('/demo')}}" class="btn btn-primary ghost-button">go to site demo</a>
        </div>
        <div class="panel right-panel">
            <img src="{{asset('img/final/tutorial-login.png')}}">
            <span>tutorial video</span>
            <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister </p>
            <a href="{{url('/tutorial')}}" class="btn btn-primary ghost-button">go to site tutorial</a>
        </div>
    </div>
</section>

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
            <img src="{{asset('img/login_image.png')}}">
            <img class="half-circle" src="{{asset('img/login_half_circle.png')}}">
        </div>
        <!-- <a class="btn close-modal" data-modal="#modal-login" href="#">+</a> -->
    </div>
</div>
@endsection
