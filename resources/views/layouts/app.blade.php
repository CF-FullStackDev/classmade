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
<body id="{{ Auth::guest() ? 'app-login' : 'app-home' }}">
    <div class="wrapper" id="{{ Auth::guest() ? 'login-container' : '' }}">
        @if (Auth::guest())
        <nav>
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{asset('img/classmade-logo.png')}}" alt="Classmade">
                </a>
                <div class="login-buttons">
                    <div>
                        <button class="btn btn-primary-outline open-modal" data-modal="#modal-login" id="btn-modal-login">Sign In</button>
                        <a href="{{ route('register') }}" style=""><button class="btn btn-primary">Sign up</button></a>
                    </div>
                </div>
            </div>
        </nav>
        @else
        <nav>
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{asset('img/classmade-logo.png')}}" alt="Classmade">
                </a>
                <div>
                    <div class="input-search">
                        <input type="text" name="" value="" placeholder="search">
                        <div class="input-icon-search"></div>
                        <ul class="input-search-list scrollbar-design scroll-content">
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Kate Strickland</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Kate landstrick shrek fiona</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Kate landstrick shrek fiona</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Kate landstrick shrek fiona</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Kate landstrick shrek fiona</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Sample 1</span></a></li>
                            <li><a href="#"><img src="{{asset('img/profile-avatar.png')}}"><span>Sample 2</span></a></li>
                            
                        </ul>
                    </div>
                    <ul class="dropdown-container">
                        <li class="dropdown">
                            <a href="#" class="settings">
                                <img src="{{asset('storage/avatar/'.$user->profile_photo)}}" alt="Profile Menu" id="nav_profilephoto">
                            </a>
                            <ul class="dropdown-menu settings">
                                <li><a href="{{ url('/account_settings') }}">Account Settings</a></li>
                                <li><a href="{{ url('/transcript') }}">Transcript</a></li>
                                <li><a href="#" class="open-modal" data-modal="#modal-classmade-profile">Share Link PDF</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Guide</a>
                                    <div id="guide-toggle" class="toggle toggle-float">
                                        <div class="toggle-switch"></div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="notification">
                                <div class="notif-icon">
                                    <div class="notif-badge">2</div>
                                </div>
                            </a>
                            <ul class="dropdown-menu notification">
                                <li class="header">
                                    <span>Notifaction</span>
                                </li>
                                 <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                        <div class="media-body">
                                            <span>Angelo liked your photo. Please do check other photos that was liked in the past few days.</span>
                                            <span class="font-extraLight">July 25 at 2:35pm</span>
                                        </div>
                                        <div class="media-right">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                        <div class="media-body">
                                            <span>Angelo liked your photo</span>
                                            <span class="font-extraLight">July 25 at 2:35pm</span>
                                        </div>
                                        <div class="media-right">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                        <div class="media-body">
                                            <span>Cristian liked your cover photo</span>
                                            <span class="font-extraLight">July 25 at 2:35pm</span>
                                        </div>
                                        <div class="media-right">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                        <div class="media-body">
                                            <span>Kim added you as a connection</span>
                                            <span class="font-extraLight">July 25 at 2:35pm</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('img/icons/warning.png')}}">
                                        </div>
                                        <div class="media-body">
                                            <span>One day left to finish your project name</span>
                                            <span class="font-extraLight">July 25 at 2:35pm</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="chat-icon">
                                <div class="notif-badge">10</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif

        @yield('content')

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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cropit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
</body>
</html>
