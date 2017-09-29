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
    <body id="app-home">
        <div class="wrapper">
            <nav>
                <div>
                    <a href="{{ url('/') }}">
                        <img src="{{asset('img/classmade-logo.png')}}" alt="Classmade">
                    </a>
                    <div>
                        <div class="input-search">
                            <input type="text" name="" value="" placeholder="search">
                            <div class="input-icon-search"></div>
                        </div>
                        <ul class="dropdown-container">
                            <li class="dropdown">
                                <a href="#" class="settings">
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="Profile Menu">
                                </a>
                                <ul class="dropdown-menu settings">
                                    <li><a href="{{ url('/account_settings') }}">Account Settings</a></li>
                                    <li><a href="{{ url('/transcript') }}">Transcript</a></li>
                                    <li><a href="#">Share Link PDF</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Guide</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Sign Out</a></li>
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

            <div id="container" style="margin-top:150px;">
                <div id="content">
                    <div class="panel">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Pending Reviews</span>
                                <div class="panel-option">
                                    <a href="{{ url('/') }}">Go Back</a>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-review-container">

                                <!-- Review Data -->
                                <div class="profile-review-panel">
                                    <div class="media-left">
                                        <img src="{{asset('img/profile-avatar.png')}}">
                                    </div>
                                    <div class="media-body">
                                        <span>Ollie Harris</span>
                                        <span>Aug 2018</span>
                                        <span>Portfolio</span>
                                        <div class="review-comment">
                                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                        </div>
                                        <div class="review-badge">
                                            <span>Badge Granted:</span>
                                            <img src="{{asset('img/badge/self-motivated.png')}}">
                                            <img src="{{asset('img/badge/organised.png')}}">
                                            <img src="{{asset('img/badge/problem-solving.png')}}">
                                            <img src="{{asset('img/badge/trustworthy.png')}}">
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <button type="button" class="btn btn-primary-ghost">Ignore</button>
                                        <button type="button" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>

                                <div class="profile-review-panel">
                                    <div class="media-left">
                                        <img src="{{asset('img/profile-avatar.png')}}">
                                    </div>
                                    <div class="media-body">
                                        <span>Ollie Harris</span>
                                        <span>Aug 2018</span>
                                        <span>Portfolio</span>
                                        <div class="review-comment">
                                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                        </div>
                                        <div class="review-badge">
                                            <span>Badge Granted:</span>
                                            <img src="{{asset('img/badge/self-motivated.png')}}">
                                            <img src="{{asset('img/badge/organised.png')}}">
                                            <img src="{{asset('img/badge/problem-solving.png')}}">
                                            <img src="{{asset('img/badge/trustworthy.png')}}">
                                        </div>
                                    </div>
                                    <div class="media-right">
                                        <button type="button" class="btn btn-primary-ghost">Ignore</button>
                                        <button type="button" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                                <!-- End of Review -->

                                <!-- Empty Data -->
                                <div class="profile-review-empty">
                                    <img src="{{asset('img/final/empty-review.png')}}">
                                    <span>No reviews yet</span>
                                </div>
                                <!-- End of Empty -->

                            </div>
                        </div>
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
