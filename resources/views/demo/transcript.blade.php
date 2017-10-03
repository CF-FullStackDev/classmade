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
            <div class="demo-alert">Classmade Demo Site for testing purposes </div>
            <nav class="demo-nav">
                <div>
                    <a href="{{ url('/demo') }}">
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
                                    <li><a href="{{ url('demo/account_settings') }}">Account Settings</a></li>
                                    <li><a href="{{ url('demo/transcript') }}">Transcript</a></li>
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
                                <p class="bell-icon"></p><span>Transcript</span>
                                <div class="panel-option">
                                    <button class="btn btn-primary-outline open-modal" data-modal="#modal-transcript">Request Transcript</button>
                                </div>
                                <div class="panel-tabs">
                                    <div class="left">
                                        <ul>
                                            <li class="target-section" data-id="2">Approve</li>
                                            <li class="active target-section" data-id="1">Request</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-transcript transcript-section1">
                                <table class="transcript-request">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Request Documents</th>
                                            <th>Date Request</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>De La Salle - College of St. Benilde</td>
                                            <td>Form 137</td>
                                            <td>June 14 2015</td>
                                            <td>Pending</td>
                                            <td>
                                                <button class="btn btn-primary-outline">Cancel Request</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>De La Salle - College of St. Benilde</td>
                                            <td>Form 137</td>
                                            <td>June 14 2015</td>
                                            <td>Pending</td>
                                            <td>
                                                <button class="btn btn-primary-outline">Cancel Request</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="profile-transcript transcript-section2">
                                <table class="transcript-approve">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Received</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('img/icons/pdf.png')}}" class="transcript-type">
                                                <span>Transcript Name.PDF</span>
                                            </td>
                                            <td>June 14 2015</td>
                                            <td>
                                                <img src="{{asset('img/icons/download.png')}}" class="transcript-download">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('img/icons/pdf.png')}}" class="transcript-type">
                                                <span>Transcript Name.PDF</span>
                                            </td>
                                            <td>June 14 2015</td>
                                            <td>
                                                <img src="{{asset('img/icons/download.png')}}" class="transcript-download">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-dialog">
                    <div class="modal-body transcript" id="modal-transcript">
                        <div class="content">
                            <form action="">
                                <span class="header">Transcript Request</span>
                                <label>School Name</label>
                                <input type="text" name="" value="">

                                <label>School Email</label>
                                <input type="text" name="" value="">

                                <label>Reason for request</label>
                                <input type="text" name="" value="">

                                <label>ID Card</label>
                                <div class="transcript-upload">
                                    <span>Upload Student ID Card</span>
                                    <img src="{{asset('img/icons/upload_icon2.png')}}">
                                </div>
                                <input type="file" id="transcript-file" accept="image/*" hidden>

                                <div class="btn-panel">
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                        <a class="btn close-modal" data-modal="#modal-transcript" href="#">+</a>
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
