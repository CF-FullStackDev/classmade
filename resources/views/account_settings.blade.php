<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Classmade</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.6.0/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.6.0/slick/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('select2/dist/css/select2.min.css') }}">
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
                                        <span>Notification</span>
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
                    <div class="panel account-options">
                        <div class="panel-body">
                            <ul class="account-tabs">
                                <li data-tab="tab-account" class="current">Account</li>
                                <li data-tab="tab-contact">Contact</li>
                                <li data-tab="tab-journey">Journey</li>
                                <li data-tab="tab-password">Password</li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel account-content">
                        <div class="panel-body">
                            <div id="tab-account" class="tab-content current">
                                <form action="">
                                    <span class="header">Profile Photo</span>
                                    <div class="dashed-tips-container">
                                        <div class="icon"><span>i</span></div>
                                        <div class="title">Some Tips</div>
                                        When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                    </div>
                                    <div class="account-photo">
                                        <img src="{{asset('img/icons/camera_icon.png')}}">
                                        <span>Click to add Photo</span>
                                    </div>

                                    <div class="account-photo account-photo-uploaded">
                                        <img class="file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        <img src="{{asset('img/icons/camera_icon.png')}}">
                                        <span>Click to add Photo</span>
                                    </div>


                                    <span class="header">Personal Information</span>
                                    <label>Last Name</label>
                                    <input type="text" name="" required>
                                    <label>First Name</label>
                                    <input type="text" name="" required>
                                    <label>Birthday</label>
                                    <div class="account-select">
                                        <select name="">
                                            <option value="">January</option>
                                            <option value="">February</option>
                                            <option value="">March</option>
                                            <option value="">April</option>
                                            <option value="">May</option>
                                            <option value="">June</option>
                                            <option value="">July</option>
                                            <option value="">August</option>
                                            <option value="">September</option>
                                            <option value="">October</option>
                                            <option value="">November</option>
                                            <option value="">December</option>
                                        </select>
                                    </div>
                                    <input type="text" name="" class="birthday-date" maxlength="2">
                                    <input type="text" name="" class="birthday-year" maxlength="4">
                                    <label>Student Status</label>
                                    <div class="account-select">
                                        <select name="">
                                            <option value="">-</option>
                                        </select>
                                    </div>
                                    <div class="account-select">
                                        <select name="">
                                            <option value="">-</option>
                                        </select>
                                    </div>

                                    <span class="header">Skill</span>
                                    <label>Add Skill</label>
                                    <div class="">
                                        <select class="select2" name="sample[]" multiple="multiple" style="width:100%;">
                                            <option value="">Insert Skill</option>
                                            <option value="">Another Skill</option>
                                            <option value="">Long Name Skill</option>
                                        </select>
                                    </div>
                                   <!--  <div class="skill-container">
                                        <div class="skill">Insert Skill</div>
                                        <div class="skill">Another Skill</div>
                                        <div class="skill">Long Name Skill</div>
                                    </div> -->
                                    <!-- <a class="skill-edit edit-icon"></a> -->

                                    <span class="header">Language</span>
                                    <label>Add Language</label>
                                    <div class="">
                                        <select class="select2" name="sample[]" multiple="multiple" style="width:100%;">
                                            <option value="">Insert Skill</option>
                                            <option value="">Another Skill</option>
                                            <option value="">Long Name Skill</option>
                                        </select>
                                    </div>

                                  <!--   <div class="language-container">
                                        <div class="language">Insert Skill</div>
                                        <div class="language">Another Skill</div>
                                        <div class="language">Long Name Skill</div>
                                        
                                    </div> -->
                                    <!-- <a class="language-edit edit-icon"></a> -->

                                    <div class="btn-panel">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div id="tab-contact" class="tab-content">
                                <span class="header">Contact</span>
                                <form action="">
                                    <label>Sign in Email</label>
                                    <input type="email" name="" required>
                                    <label>Secondary Email</label>
                                    <input type="email" name="" required>
                                    <label>Phone No</label>
                                    <input type="text" name="" required>

                                    <div class="btn-panel">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div id="tab-journey" class="tab-content">
                                <span class="header">Journey</span>
                                <form action="">
                                     <div class="account-journey">
                                        <div class="school-img-holder">
                                            
                                        </div>

                                        <div class="account-select select2-max-width inline1">
                                            <select name="">
                                                <option selected="selected">From</option>
                                            </select>
                                        </div>
                                        <div class="account-select select2-max-width inline2">
                                            <select name="">
                                                <option selected="selected">To</option>
                                            </select>
                                        </div>

                                        <div class="account-select select2-max-width">
                                            <select name="">
                                                <option selected="selected">School</option>
                                            </select>
                                        </div>
                                        <div class="account-select select2-max-width">
                                            <select name="">
                                                <option selected="selected">Level</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="account-journey">
                                        <div class="school-img-holder">
                                            <img class="file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        </div>

                                        <div class="account-select select2-max-width inline1">
                                            <select name="">
                                                <option selected="selected">From</option>
                                            </select>
                                        </div>
                                        <div class="account-select select2-max-width inline2">
                                            <select name="">
                                                <option selected="selected">To</option>
                                            </select>
                                        </div>

                                        <div class="account-select select2-max-width">
                                            <select name="">
                                                <option selected="selected">School</option>
                                            </select>
                                        </div>
                                        <div class="account-select select2-max-width">
                                            <select name="">
                                                <option selected="selected">Level</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a href="" class="journey-request">Click to Request School</a>

                                    <div class="btn-panel">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                            <div id="tab-password" class="tab-content">
                                <span class="header">Password</span>
                                <form action="">
                                    <label>Current Password</label>
                                    <input type="password" name="" required>
                                    <label>Retype Current Password</label>
                                    <input type="password" name="" required>
                                    <label>New Password</label>
                                    <input type="password" name="" required>
                                    <label>Retype New Password</label>
                                    <input type="password" name="" required>

                                    <div class="btn-panel">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
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
    <script type="text/javascript" src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('select2/dist/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $('.select2').select2();
    </script>
    </body>
</html>
