<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Classmade</title>

    <link rel="icon" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.6.0/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.6.0/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('select2/dist/css/select2.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-login">
    <div class="wrapper">
        <nav>
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{asset('img/classmade-logo.png')}}" alt="Classmade">
                </a>
                <div class="login-buttons">
                    <div>
                        <button class="btn btn-primary-outline open-modal" data-modal="#modal-login" id="btn-modal-login">Sign In</button>
                        <a href="{{ route('register') }}" style=""><button class="btn btn-primary ">Sign up</button></a>
                    </div>
                </div>
            </div>
        </nav>
        <span id="modal-login-error">{{ $errors->first('email').$errors->first('password') }}</span>

        <div class="tutorial-wrapper">
            <div class="tutorial-group">
                <h2 class="title">How to use classmade 101</h2>
                <div class="video-container">
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary open-modal" data-modal="#modal-video">Watch Video</button>
                    </div>
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary open-modal" data-modal="#modal-video">Watch Video</button>
                    </div>
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary open-modal" data-modal="#modal-video">Watch Video</button>
                    </div>
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary open-modal" data-modal="#modal-video">Watch Video</button>
                    </div>
                </div>
            </div>
            <div class="tutorial-group">
                <h2 class="title">Profile Page</h2>
                <div class="video-container">
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary">Watch Video</button>
                    </div>
                    <div class="video">
                        <img src="{{ asset('img/tut.png') }}" class="open-modal" data-modal="#modal-video" alt="">
                        <span>Sign up</span>
                        <ul>
                            <li>1. Click on the picture tab to set your profile picture.</li>
                            <li>2. Click “Upload Latest” to choose from your desktop photos or simply drag the picture to upload.</li>
                            <li>3. Drag the slider to scale the image or drag to reposition the photo. </li>
                            <li>4. Hit “Save” to confirm. </li>
                            <li>5. Explain upvote (Hit the "appreciate" button to like your fellow classmade's profile picture.)</li>
                        </ul>
                        <button class="btn btn-primary open-modal" data-modal="#modal-video">Watch Video</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-dialog">
            <div class="modal-body profile-video" id="modal-video">
                <div class="content">
                    <div class="video-wrapper">
                        <div class="video-player">
                            <img class="video-play" src="{{asset('img/final/icons/play.png')}}" alt="">
                            <video width="320" height="240" controls>
                              <source src="{{ url('videos/cm-introvid-draft6.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <!-- <a class="btn btn-primary close-modal" data-modal="#modal-login" href="#">+</a> -->
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cropit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
</body>
</html>
