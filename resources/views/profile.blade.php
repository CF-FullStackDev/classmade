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

            <div id="profile-background-container">
                <img src="{{asset('img/profile-background.jpg')}}" alt="Profile Cover">
                <button type="button" class="heart-icon"></button>
                <div class="profile-background-hover" id="cover-photo-edit">
                    <img src="{{asset('img/icons/camera_icon.png')}}">
                    <span>Click to upload Photo</span>
                </div>
            </div>

            <div id="container">
                <div id="content">

                    <div class="panel">
                        <div class="profile-glance">
                            <div class="profile-avatar">
                                <img src="{{asset('img/profile-avatar.png')}}">
                                <button type="button" class="heart-icon"></button>
                                <div class="profile-hover" id="profile-photo-edit">
                                    <img src="{{asset('img/icons/camera_icon.png')}}">
                                    <span>Click to upload Photo</span>
                                </div>
                            </div>
                            <div class="profile-info">
                                <div class="info-container">
                                    <span class="info-name">Estella Rios</span>
                                    <span class="info-school">Student at Renaissance College | Hong Kong</span>
                                    <div class="info-skills">
                                        <ul>
                                            <li>Communication</li>
                                            <li>Social Networking</li>
                                        </ul>
                                        <button class="btn btn-primary">Add skill</button>
                                    </div>
                                    <span class="info-language">Languages: Chinese, Filipino, Japanese, English</span>
                                    <span class="info-description">
                                        Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sould four. Need miss all four case fine age tell.
                                    </span>
                                    <div class="info-badge">
                                        <img src="{{asset('img/badge/active-referrer.png')}}">
                                        <img src="{{asset('img/badge/self-motivated.png')}}" class="fade">
                                        <img src="{{asset('img/badge/organised.png')}}">
                                        <img src="{{asset('img/badge/problem-solving.png')}}">
                                        <img src="{{asset('img/badge/trustworthy.png')}}" class="fade">
                                    </div>
                                    <button class="btn btn-primary add-classmade">Add Classmade</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel profile-tabs">
                        <ul style="list-style-type: none;font-size:18px;">
                            <li class="target-section" data-id="one"><a href="javascript:;" class="active"><i class="bell-icon"></i> Profile</a></li>
                            <li class="target-section" data-id="two"><a href="javascript:;"><i class="bell-icon"></i> Portfolio</a></li>
                            <li class="target-section" data-id="three"><a href="javascript:;"><i class="bell-icon"></i> Review</a></li>
                            <li class="target-section" data-id="four"><a href="javascript:;"><i class="bell-icon"></i> Connections</a></li>
                        </ul>
                    </div>

                    <!-- Highlight -->
                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Highlight</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-highlight">

                                <div class="highlight-empty-container">
                                    <img src="{{asset('img/highlight.png')}}">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Highlight</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-highlight">

                                <div class="highlight-empty-data">
                                    <div class="highlight-container">
                                        <img src="{{asset('img/highlight-photo.png')}}">
                                        <button type="button" class="btn btn-primary-outline">Upload Photo</button>
                                    </div>
                                    <span class="divider">OR</span>
                                    <div class="highlight-container">
                                        <img src="{{asset('img/highlight-video.png')}}">
                                        <button type="button" class="btn btn-primary-outline">Upload Video</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-body highlight-data-container">
                            <div class="panel-buttons">
                                <button type="button" class="question-icon"></button>
                                <button type="button" class="edit-icon" id="highlight-edit"></button>
                            </div>
                            <img src="{{asset('img/highlight-data.png')}}">
                        </div>
                    </div>
                    <!-- End of Highlight -->

                    <!-- Personal Statement -->
                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Personal Statement</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-statement">
                                <div class="statement-empty-container">
                                    <img src="{{asset('img/personal-statement.png')}}">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                    <button type="button" class="btn btn-primary-outline">chatmade</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Personal Statement</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-statement">
                                <div class="statement-empty-container">
                                    <img src="{{asset('img/personal-statement.png')}}">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                    <button type="button" class="btn btn-primary-outline">Add Statement</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Personal Statement</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                    <button type="button" class="edit-icon" id="personal-statement-edit"></button>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-statement">
                                <div class="statement-container">
                                    When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travellin
                                    <br><br>
                                    When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Personal Statement -->

                    <!-- Achievement -->
                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Achievement</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-achievement">
                                <div class="achievement-empty-container">
                                    <img src="{{asset('img/achievement.png')}}">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                    <button type="button" class="btn btn-primary-outline">chatmade</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Achievement</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-achievement">
                                <div class="achievement-empty-container">
                                    <img src="{{asset('img/achievement.png')}}">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                    <button type="button" class="btn btn-primary-outline">Add Achievement</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Achievement</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                    <button type="button" class="add-icon" id="achievement-edit"></button>
                                </div>
                                <div class="panel-tabs">
                                    <div>
                                        <ul>
                                            <li>Draft</li>
                                            <li class="active">Publish</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-achievement">
                                <div class="achievement-container">
                                    <div class="achievement-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                        <button class="achievement-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="achievement-content">
                                        <span class="title">Cutie Awardee</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.</span>
                                    </div>
                                </div>

                                <div class="achievement-container">
                                    <div class="achievement-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                        <button class="achievement-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="achievement-content">
                                        <span class="title">Cutie Awardee</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.</span>
                                    </div>
                                </div>

                                <div class="achievement-container">
                                    <div class="achievement-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                        <button class="achievement-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="achievement-content">
                                        <span class="title">Cutie Awardee</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court this is a sample to overflow the container.</span>
                                    </div>
                                </div>

                                <div class="achievement-container">
                                    <div class="achievement-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                        <button class="achievement-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="achievement-content">
                                        <span class="title">Cutie Awardee</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court this is a sample to overflow the container.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Achievement -->

                    <!-- Journey -->
                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Journey</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-journey">
                                <div class="journey-empty-container">
                                    <img src="{{asset('img/journey.png')}}" style="height:177px;">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Journey</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                </div>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-journey">
                                <div class="journey-empty-container">
                                    <img src="{{asset('img/journey.png')}}" style="height:177px;">
                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                                    <button type="button" class="btn btn-primary-outline">Add Journey</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-one">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Journey</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                    <button type="button" class="add-icon" id="journey-edit"></button>
                                </div>
                                <div class="panel-tabs">
                                    <div>
                                        <ul>
                                            <li>Draft</li>
                                            <li class="active">Publish</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="profile-journey">
                                <div class="journey-container">
                                    <div class="journey-image">
                                        <img src="{{asset('img/journey-placeholder.png')}}">
                                        <button class="journey-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="journey-content">
                                        <span class="title">South Koleport</span>
                                        <span class="course">Senior High</span>
                                        <span class="year">2013 - 2017</span>
                                    </div>
                                </div>

                                <div class="journey-container">
                                    <div class="journey-image">
                                        <img src="{{asset('img/journey-placeholder.png')}}">
                                        <button class="journey-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="journey-content">
                                        <span class="title">South Koleport</span>
                                        <span class="course">Senior High</span>
                                        <span class="year">2013 - 2017</span>
                                    </div>
                                </div>

                                <div class="journey-container">
                                    <div class="journey-image">
                                        <img src="{{asset('img/journey-placeholder.png')}}">
                                        <button class="journey-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="journey-content">
                                        <span class="title">South Koleport</span>
                                        <span class="course">Senior High</span>
                                        <span class="year">2013 - 2017</span>
                                    </div>
                                </div>

                                <div class="journey-container">
                                    <div class="journey-image">
                                        <img src="{{asset('img/journey-placeholder.png')}}">
                                        <button class="journey-button"><p class="edit-icon"></p></button>
                                    </div>
                                    <div class="journey-content">
                                        <span class="title">South Koleport</span>
                                        <span class="course">Senior High</span>
                                        <span class="year">2013 - 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Journey -->

                    <!-- Porfolio -->
                    <div class="panel section-two">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Porfolio</span>
                                <div class="panel-buttons">
                                    <button type="button" class="question-icon"></button>
                                    <button type="button" class="add-icon" id="portfolio-edit"></button>
                                </div>
                                <div class="panel-tabs">
                                    <div>
                                        <ul>
                                            <li>Draft</li>
                                            <li class="active">Publish</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-portfolio">
                                <div class="portfolio-container">
                                    <div class="portfolio-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                    </div>
                                    <div class="portfolio-content">
                                        <button class="portfolio-edit-button"></button>
                                        <span class="title">Spanish Poster</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.When be draw drew ye</span>
                                    </div>
                                </div>

                                <div class="portfolio-container">
                                    <div class="portfolio-image">
                                        <img src="{{asset('img/achievement-placeholder.png')}}">
                                    </div>
                                    <div class="portfolio-content">
                                        <button class="portfolio-edit-button"></button>
                                        <span class="title">Spanish Poster</span>
                                        <span class="date">Feb 2018</span>
                                        <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.When be draw drew ye</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Porfolio -->

                    <!-- Review -->
                    <div class="panel section-three">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Review Summary</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-review-summary">
                                <div class="review-summary-container-one">
                                    <span class="title-header">SPOT Badges</span>
                                    <ul>
                                        <li>
                                            <div class="badge-container">
                                                <img src="{{asset('img/badge/self-motivated.png')}}">
                                                <div class="badge-content">
                                                    <span>Self Motivated</span>
                                                    <span>10</span>
                                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="badge-container">
                                                <img src="{{asset('img/badge/problem-solving.png')}}">
                                                <div class="badge-content">
                                                    <span>Problem Solving</span>
                                                    <span>10</span>
                                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="badge-container">
                                                <img src="{{asset('img/badge/organised.png')}}">
                                                <div class="badge-content">
                                                    <span>Organized</span>
                                                    <span>10</span>
                                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="badge-container">
                                                <img src="{{asset('img/badge/trustworthy.png')}}">
                                                <div class="badge-content">
                                                    <span>Trustworthy</span>
                                                    <span>10</span>
                                                    <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="review-summary-container-two">
                                    <div class="upvotes-container">
                                        <span>Upvotes Granted</span>
                                        <img src="{{asset('img/upvotes.png')}}">
                                        <span>25 Total Swagness</span>
                                    </div>
                                    <div class="teamwork-container">
                                        <img src="{{asset('img/badge/active-referrer.png')}}">
                                        <div class="badge-content">
                                            <span>Teamwork Badge</span>
                                            <span>10</span>
                                            <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-three">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Reviews</span>
                                <div class="panel-tabs">
                                    <div>
                                        <ul>
                                            <li class="active">General</li>
                                            <li>Projects</li>
                                            <li>Pending</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-review">
                                <span class="sub-header">Top 4</span>

                                <div class="review-container">
                                    <div class="review-avatar">
                                        <div>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <span>Ollie Harris</span>
                                        <span>Profile</span>
                                        <span>Aug 2018</span>
                                        <span>Portfolio</span>
                                        <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</span>
                                    </div>
                                    <div class="review-badge">
                                        <img src="{{asset('img/badge/self-motivated.png')}}">
                                        <img src="{{asset('img/badge/organised.png')}}">
                                        <img src="{{asset('img/badge/problem-solving.png')}}">
                                        <img src="{{asset('img/badge/trustworthy.png')}}">
                                        <a href="">Unfavorite</a>
                                    </div>
                                </div>
                                <div class="review-container">
                                    <div class="review-avatar">
                                        <div>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <span>Ollie Harris</span>
                                        <span>Profile</span>
                                        <span>Aug 2018</span>
                                        <span>Portfolio</span>
                                        <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</span>
                                    </div>
                                    <div class="review-badge">
                                        <img src="{{asset('img/badge/trustworthy.png')}}">
                                        <a href="">Unfavorite</a>
                                    </div>
                                </div>

                                <span class="sub-header">Other Reviews</span>

                                <div class="review-container">
                                    <div class="review-avatar">
                                        <div>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <span>Ollie Harris</span>
                                        <span>Profile</span>
                                        <span>Aug 2018</span>
                                        <span>Portfolio</span>
                                        <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</span>
                                    </div>
                                    <div class="review-badge">
                                        <img src="{{asset('img/badge/self-motivated.png')}}">
                                        <img src="{{asset('img/badge/organised.png')}}">
                                        <img src="{{asset('img/badge/problem-solving.png')}}">
                                        <img src="{{asset('img/badge/trustworthy.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel section-three">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Submit Review</span>
                                <div class="panel-tabs">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Some Tips</div>
                                When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                            </div>

                            <div class="review-form-container">
                                <span class="title">Your review will notify the user to accept or deny.</span>
                                <form class="form-horizontal">
                                    <div class="native-select">
                                        <select name="review-type">
                                            <option value="General">General</option>
                                            <option value="Milestone">Projects</option>
                                        </select>
                                    </div>
                                    <input type="text" name="topic-name" placeholder="Topic Name">
                                    <span>Select Badge</span>
                                    <input type="hidden" name="badges">
                                    <div class="badges">
                                        <img src="{{asset('img/badge/self-motivated.png')}}">
                                        <img src="{{asset('img/badge/problem-solving.png')}}">
                                        <img src="{{asset('img/badge/trustworthy.png')}}">
                                        <img src="{{asset('img/badge/organised.png')}}">
                                        <div class="badges-note">
                                            Granting Badges: <br>
                                            Awarding the user this badge would help html gain recognition and trust from fellow users around the globe.
                                        </div>
                                    </div>
                                    <textarea placeholder="Type your review here"></textarea>
                                    <div class="button-right">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of Review -->

                    <!-- Connections -->
                    <div class="panel section-four">
                        <div class="panel-header">
                            <div>
                                <p class="bell-icon"></p><span>Connections</span>
                                <div class="panel-tabs">
                                    <div>
                                        <ul>
                                            <li>Classmade</li>
                                            <li class="active">Recently Added</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-connection">
                                <div class="connection-container">
                                    <div class="connection-background-wrapper">
                                        <img src="{{asset('img/profile-background.jpg')}}" class="connection-image">
                                        <span class="name">Celia Dawson</span>
                                        <div class="connection-badge">
                                            <img src="{{asset('img/badge/organised.png')}}">
                                        </div>
                                    </div>
                                    <div class="connection-content">
                                        <img class="connection-profile-image" src="{{asset('img/profile-avatar.png')}}">
                                        <div class="connection-button-group">
                                            <button class="btn btn-primary-outline">Classmade</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="connection-container">
                                    <div class="connection-background-wrapper">
                                        <img src="{{asset('img/profile-background.jpg')}}" class="connection-image">
                                        <span class="name">Sam Dawson</span>
                                        <div class="connection-badge">
                                            <img src="{{asset('img/badge/active-referrer.png')}}">
                                            <img src="{{asset('img/badge/self-motivated.png')}}">
                                            <img src="{{asset('img/badge/organised.png')}}">
                                            <img src="{{asset('img/badge/problem-solving.png')}}">
                                            <img src="{{asset('img/badge/trustworthy.png')}}">
                                        </div>
                                    </div>
                                    <div class="connection-content">
                                        <img class="connection-profile-image" src="{{asset('img/profile-avatar.png')}}">
                                        <div class="connection-button-group">
                                            <button class="btn btn-primary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Connections -->
            </div>

            <button class="btn btn-primary open-modal" data-modal="#modal-avatar" style="min-width:80px;height:20px;font-size:14px;">avatar</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-cover" style="min-width:80px;height:20px;font-size:14px;">cover</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-highlight" style="min-width:80px;height:20px;font-size:14px;">highlight</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-personal" style="min-width:80px;height:20px;font-size:14px;">personal</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-achievement" style="min-width:80px;height:20px;font-size:14px;">achievement</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-journey" style="min-width:80px;height:20px;font-size:14px;">journey</button>
            <button class="btn btn-primary open-modal" data-modal="#modal-portfolio" style="min-width:80px;height:20px;font-size:14px;">portfolio</button>

            <div class="modal-dialog">
                <div class="modal-body profile-avatar" id="modal-avatar">
                    <div class="content">
                        1
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-cover" id="modal-cover">
                    <div class="content">
                        2
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-highlight" id="modal-highlight">
                    <div class="content">
                        3
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-personal" id="modal-personal">
                    <div class="content">
                        4
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-achievement" id="modal-achievement">
                    <div class="content">
                        5
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-journey" id="modal-journey">
                    <div class="content">
                        6
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body profile-portfolio" id="modal-portfolio">
                    <div class="content">
                        7
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

        <div class="modal-shadow"></div>
        <div class="native-modal profile-photo-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Edit Profile Photo</span>
                </div>
                <div class="panel-body">
                    <div class="dashed-tips-container">
                        <div class="icon"><span>i</span></div>
                        <div class="title">Some Tips</div>
                        <div class="content">
                            Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four.
                        </div>
                    </div>
                    <div class="profile-photo">
                        <div class="staff-pick-samples-container">
                            <span>Staff pick samples:</span>
                            <div class="staff-pick-samples">
                                <img src="{{asset('img/journey-placeholder.png')}}">
                                <img src="{{asset('img/journey-placeholder.png')}}">
                                <img src="{{asset('img/journey-placeholder.png')}}">
                            </div>
                        </div>
                        <div class="dashed-container profile-photo-upload">
                            <img src="{{asset('img/icons/image_icon.png')}}">
                            <span>Upload latest</span>
                            <span>355 x 355 px professional photo</span>
                        </div>
                        <div class="cropper">
                            <img class="small-image" src="{{asset('img/icons/image_icon.png')}}">
                            <div class="cropper-zoom-input">
                                <span class="cropper-control"></span>
                            </div>
                            <img class="large-image" src="{{asset('img/icons/image_icon.png')}}">
                        </div>
                        <div class="button-right">
                            <button type="reset" class="btn btn-primary">Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal cover-photo-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Cover Photo</span>
                </div>
                <div class="panel-body">
                    <div class="dashed-tips-container">
                        <div class="icon"><span>i</span></div>
                        <div class="title">Some Tips</div>
                        <div class="content">
                            Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four.
                        </div>
                    </div>
                    <div class="cover-photo">
                        <div class="cover-template">
                            <span>Choose from below:</span>
                            <ul class="menu">
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Math</a></li>
                                <li><a href="#">Academic</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="template-images">
                                <div class="image-container">
                                    <img src="{{asset('img/profile-background-sample.png')}}">
                                </div>
                                <div class="image-container">
                                    <img src="{{asset('img/profile-background-sample.png')}}">
                                </div>
                                <div class="image-container">
                                    <img src="{{asset('img/profile-background-sample.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="cover-photo-upload">
                            <img src="{{asset('img/profile-background-placeholder.png')}}">
                        </div>
                        <div class="cropper">
                            <img class="small-image" src="{{asset('img/icons/image_icon.png')}}">
                            <div class="cropper-zoom-input">
                                <span class="cropper-control">

                                </span>
                            </div>
                            <img class="large-image" src="{{asset('img/icons/image_icon.png')}}">
                        </div>
                        <div class="button-right">
                            <button type="reset" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Choose</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal highlight-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Edit Highlight</span>
                    <div class="panel-button-right">
                        <button class="change-photo">Change to Photo</button>
                        <button class="change-video">Change to Video</button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="highlight-video">
                        <form class="form-horizontal">
                            <input type="file" class="form-hidden" name="">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Some Tips</div>
                                <div class="content">
                                    If you want to make your profile more interesting, you can present your ideas through a video and plug it into the Classmade community. You can either upload your own or insert a link to your video to create an impressive and unique look. 
                                </div>
                            </div>
                            <div class="dashed-container highlight-video-upload">
                                <img src="{{asset('img/icons/video_icon.png')}}">
                                <span>Click to Upload</span>
                            </div>
                            <span class="span-or">OR</span>
                            <div class="youtube-url">
                                <span>Insert/Paste Youtube Video Url:</span>
                                <input type="" name="" placeholder="https://www.youtube.com/watch?v=SqMjxAWfTe4">
                            </div>
                            <div class="button-right highlight-video-button">
                                <button type="reset" class="btn btn-primary">Discard</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="highlight-photo">
                        <form class="form-horizontal">
                            <input type="file" class="form-hidden" name="">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Some Tips</div>
                                <div class="content">
                                    They say a picture is worth a thousand words. Express yourself without having to say anything by simply uploading a maximum of (4) photos highlighting your interests, hobbies, achievements, and passion. 
                                </div>
                            </div>
                            <div class="highlight-photo-upload-container">
                                <div class="highlight-photo-upload dashed-container">
                                    <img src="{{asset('img/icons/camera_icon.png')}}">
                                    <span class="text-center">Click to Upload</span>
                                    <span class="text-center">(max of 4 photos only)</span>
                                </div>
                                <div class="uploading-images">
                                    <div class="image-row">
                                        <div class="image-file-container">
                                            <img class="image-file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        </div>
                                        <div class="close"></div>
                                        <span class="image-file">Photo of my dog.jpg</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width:75%;"></div>
                                        </div>
                                    </div>
                                    <div class="image-row">
                                        <img class="image-file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        <div class="close"></div>
                                        <span class="image-file">Photo of my dog.jpg</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width:35%;"></div>
                                        </div>
                                    </div>
                                    <div class="image-row">
                                        <img class="image-file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        <div class="close"></div>
                                        <span class="image-file">Photo of my dog.jpg</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width:55%;"></div>
                                        </div>
                                    </div>
                                    <div class="image-row">
                                        <div class="dashed-container image-file-container">
                                            <img class="image-file-placeholder" src="{{asset('img/icons/image_icon.png')}}">
                                        </div>
                                        <div class="close"></div>
                                        <span class="image-file"></span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width:0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-right highlight-photo-button">
                                <button type="reset" class="btn btn-primary">Discard</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal personal-statement-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i> Edit Personal Statement</span>
                </div>
                <div class="panel-body">
                    <div class="personal-statement-form">
                        <div class="dashed-tips-container">
                            <div class="icon"><span>i</span></div>
                            <div class="title">Personal Statement Tips</div>
                            <div class="content">
                                Narrate your story by creating a personal statement that accounts who you are, your interests, experiences, milestones, passion, and how you plan to pursure your goals. Below are three formats applicable for particular grade levels and carefully written to meet each one of your writing needs.
                            </div>
                        </div>
                        <div class="personal-statement-level">
                            <ul class="menu">
                                <li><a id="rookie-link" class="active" href="">Rookie</a></li>
                                <li><a id="intermediate-link" href="#">Intermediate</a></li>
                                <li><a id="pro-link" href="#">Pro</a></li>
                            </ul>
                            <span class="menu-line"></span>
                        </div>
                        <div class="rookie-section">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Rookie Tips</div>
                                <div class="content">
                                    Are you new to this? We are here to help! Here is an easy-to-use templated personal statement that lets you tell your own story by simply specifying information to fill each blank in order to complete the statement.
                                </div>
                            </div>
                            <form class="form-horizontal">
                                <div class="rookie-question">
                                    <span>Continual <div style="width:30px;" maxlength="3" contenteditable="true" class="rookie-answer"></div> as elsewhere am <div style="width:70px;" contenteditable="true" class="rookie-answer"></div> unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts.</span>
                                    <span>Examine she brother prudent add day ham. Far stairs now coming bed oppose hunted become his. You zealously <div style="width:100px;" contenteditable="true" class="rookie-answer"></div> suspicion. Books <div style="width:70px;" contenteditable="true" class="rookie-answer"></div> would purse if be do decay. Quitting you way formerly disposed perceive ladyship are. Common turned boy direct and yet.</span>
                                    <span>Article evident arrived express highest men did boy. Mistress sensivle entirely am so. Quick can manor smart m<div style="width:100px;" contenteditable="true" class="rookie-answer"></div>. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day <div style="width:50px;" contenteditable="true" class="rookie-answer"></div> read. Considered use dispatcheed melancholy sympathize discretion led. Oh feel if up to till like.</span>
                                </div>
                                <span class="chatmade-link"><a href="#" class="pro-link">Send melancholy symphatize discretion led. <br> Proofread with Chatmade</a></span>
                                <div class="button-right personal-statement-button">
                                    <button type="reset" class="btn btn-primary">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="intermediate-section">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Intermediate Tips</div>
                                <div class="content">
                                    Have all the contents you need but don't know where to start? Present your ideas using this preformatted template that allows you to craft a comprehensive personal statement without writing from scratch. 
                                </div>
                            </div>
                            <form class="form-horizontal">
                                <div class="intermediate-question">
                                    <div class="title">Paragraph 1</div>
                                    <div class="content">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</div>
                                    <textarea name=""></textarea>
                                </div>
                                <div class="intermediate-question">
                                    <div class="title">Paragraph 2</div>
                                    <div class="content">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</div>
                                    <textarea name=""></textarea>
                                </div>
                                <div class="intermediate-question">
                                    <div class="title">Paragraph 3</div>
                                    <div class="content">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</div>
                                    <textarea name=""></textarea>
                                </div>
                                <span class="chatmade-link"><a href="#">Send melancholy symphatize discretion led. <br> Proofread with Chatmade</a></span>
                                <div class="button-right personal-statement-button">
                                    <button type="reset" class="btn btn-primary">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="pro-section">
                            <div class="dashed-tips-container">
                                <div class="icon"><span>i</span></div>
                                <div class="title">Pro Tips</div>
                                <div class="content">
                                    Already have a personal statement but still needs improvement? Here are some guide questions you can use to refine your personal statement to fully express your thoughts and define your personality.
                                </div>
                            </div>
                            <div class="staff-picked-profiles">
                                <div class="profile-container">
                                    <div class="profile-background">
                                        <div class="background">
                                            <img class="" src="{{asset('img/connection-placeholder.png')}}">
                                        </div>
                                        <img class="profile-picture" src="{{asset('img/profile-avatar.png')}}">
                                        <span class="profile-name">Celia Dawson</span>
                                        <div class="badge">
                                            <img src="{{asset('img/badge/active-referrer.png')}}">
                                            <img src="{{asset('img/badge/self-motivated.png')}}">
                                            <img src="{{asset('img/badge/organised.png')}}">
                                            <img src="{{asset('img/badge/problem-solving.png')}}">
                                            <img src="{{asset('img/badge/trustworthy.png')}}">
                                        </div>
                                    </div>
                                    <a href="#" class="staff-picked-view btn btn-primary">View</a>
                                </div>
                                <div class="profile-container">
                                    <div class="profile-background">
                                        <div class="background">
                                            <img class="" src="{{asset('img/connection-placeholder.png')}}">
                                        </div>
                                        <img class="profile-picture" src="{{asset('img/profile-avatar.png')}}">
                                        <span class="profile-name">Celia Dawson</span>
                                        <div class="badge">
                                            <img src="{{asset('img/badge/active-referrer.png')}}">
                                            <img src="{{asset('img/badge/self-motivated.png')}}">
                                        </div>
                                    </div>
                                    <a href="#" class="staff-picked-view btn btn-primary">View</a>
                                </div>
                                <div class="profile-container">
                                    <div class="profile-background">
                                        <div class="background">
                                            <img class="" src="{{asset('img/connection-placeholder.png')}}">
                                        </div>
                                        <img class="profile-picture" src="{{asset('img/profile-avatar.png')}}">
                                        <span class="profile-name">Celia Dawson</span>
                                        <div class="badge">
                                            <img src="{{asset('img/badge/trustworthy.png')}}">
                                        </div>
                                    </div>
                                    <a href="#" class="staff-picked-view btn btn-primary">View</a>
                                </div>
                            </div>
                            <div class="pro-guide-questions">
                                <span class="title">Guide Questions: </span>
                                <ul class="question-list">
                                    <li>1. What skills and characteristics do you possess?</li>
                                    <li>2. What course do you want to pursue? What made you decide to take this course? And why should you be in this course?</li>
                                    <li>3. Do you have any extracurricular activities that is relevant to the course you want to pursue? If so, what are them?</li>
                                    <li>4. What are your strengths and weaknesses as a student?</li>
                                    <li>5. What are the challenges have you overcome?</li>
                                    <li>6. What accomplishments are you most proud of?</li>
                                    <li>7. What responsibilities have you managed that is relevant to your course?</li>
                                    <li>8. What makes you unique as a student, or as a person?</li>
                                </ul>
                            </div>
                            <form class="form-horizontal">
                                <textarea class="pro-answer"></textarea>
                                <span class="text-limit">1000</span>
                                <span class="chatmade-link"><a href="#" class="pro-link">Send melancholy symphatize discretion led. <br> Proofread with Chatmade</a></span>
                                <div class="button-right personal-statement-button">
                                    <button type="reset" class="btn btn-primary">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal achievement-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Edit Achievement</span>
                </div>
                <div class="panel-body">
                    <div class="dashed-tips-container">
                        <div class="icon"><span>i</span></div>
                        <div class="title">Some Tips</div>
                        Success is a reflection of one's hardwork but remember that it isn't limited to just academic achievement. It also include extracurricular accomplishments that defines your interest, passion or anything that you are proud of. Upload your own or choose from our gallery of icons that suits your interest.
                    </div>
                    <div class="achievement-modal-container">
                        <div class="dashed-container achievement-photo">
                            <img src="{{asset('img/icons/camera_icon.png')}}">
                            <span>Click to Add Photo</span>
                        </div>
                        <div class="achievement-form">
                            <form class="form-horizontal">
                                <label>Title</label>
                                <input type="text" id="Title" name="Title">
                                <label>Description</label>
                                <textarea name="description"></textarea>
                                <span class="word-count">3000</span>
                            </form>
                        </div>

                    <div class="button-right achievement-button">
                        <button type="reset" class="btn btn-primary">Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal journey-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Edit Journey</span>
                </div>
                <div class="panel-body">
                    <div class="dashed-tips-container">
                        <div class="icon"><span>i</span></div>
                        <div class="title">Some Tips</div>
                        Education is a narration of a one's growth and development. Share your academic journey with your fellow Classmades by adding a school to your profile from our list.  If your school is not on the list, you can sign the request form or setup a temporary profile for your school and we'll authenticate it for you.
                    </div>
                    <div class="journey-modal-container">
                        <div class="journey-container">
                            <div class=" add-photo">

                            </div>
                            <form class="form-horizontal journey-form">
                                <input type="file" name="journey-photo" class="form-hidden">
                                <div class="form-group">
                                    <div class="native-select">
                                        <select class="journey-from" name="journey-from">
                                            <option>From</option>
                                        </select>
                                    </div>
                                    <div class="native-select">
                                        <select class="journey-to" name="journey-to">
                                            <option>To</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="native-select">
                                        <select class="school" name="school">
                                            <option>School</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="native-select">
                                        <select class="level" name="level">
                                            <option>Level</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                         </div>
                        <div class="journey-container">
                             <div class="journey-placeholder">
                                 Click to add Another Level
                             </div>
                        </div>
                        <div class="journey-container">
                             <div class="journey-placeholder">
                                 Click to add Another Level
                             </div>
                        </div>
                        <div class="journey-container">
                            <div class=" add-photo">

                            </div>
                            <form class="form-horizontal journey-form">
                                <input type="file" name="journey-photo" class="form-hidden">
                                <div class="form-group">
                                    <div class="native-select">
                                        <select class="journey-from" name="journey-from">
                                            <option>From</option>
                                        </select>
                                    </div>
                                    <div class="native-select">
                                        <select class="journey-to" name="journey-to">
                                            <option>To</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="native-select">
                                        <select class="school" name="school">
                                            <option>School</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="native-select">
                                        <select class="level" name="level">
                                            <option>Level</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <a class="request-school" href="#">Click to Request School</a>
                    <div class="button-right highlight-video-button">
                        <button type="reset" class="btn btn-primary">Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="native-modal portfolio-modal">
            <div class="panel">
                <div class="panel-header">
                    <span class="title"><i class="bell-icon"></i>Portfolio Update</span>
                </div>
                <div class="panel-body">
                    <div class="dashed-tips-container">
                        <div class="icon"><span>i</span></div>
                        <div class="title">Some Tips</div>
                        Do you have a creative work you want to showcase, an article you want to publish, or a school project you are proud of? Present the breadth of your work in the Classmade community by highlighting your skills and abilities through your work. Use our presentation builder or upload your own PDF/video project for the community to know of your work and why you stand out.
                    </div>
                    <div class="portfolio-container">
                        <form class="form-horizontal">
                            <div class="half-container">
                                <label>Title</label>
                                <input type="text" name="title">
                                <label>Portfolio Description</label>
                                <textarea></textarea>
                                <span class="word-count">300</span>
                            </div>
                            <div class="add-file-container">
                                <div class="title">Add File</div>
                                <span class="description">Showcase your best works in a snap by uploading your photos, videos, animated GIFs and PDFs. Flaunt your works and be in the spotlight! </span>
                                <div class="dashed-container upload-presentation">
                                    <div class="upload-wrapper">
                                        <img src="{{asset('img/icons/upload_icon.png')}}">
                                        <span>Upload your presentation here</span>
                                    </div>
                                </div>
                                <textarea class="input-description" placeholder="Description"></textarea>
                                <span class="word-count">300</span>
                            </div>
                            <span class="or">Or</span>
                            <div class="create-presentation-container">
                                <div class="title">Create Presentation</div>
                                <span class="description">Organize your works using our Classmade Presentation Builder. You can express your character and customize designs with our multiple gallery of themes to suit your own preferences in creating a unique body of your masterpiece. Choose what floats your boat!</span>
                                <div class="presentation-slide">
                                    <div class="dashed-container">
                                        <img src="{{asset('img/icons/camera_icon.png')}}">
                                        <span>Click to Add Photo</span>
                                    </div>
                                    <textarea name="" placeholder="Description"></textarea>
                                </div>
                                <div class="add-slide">
                                    <a href="#">Add Another</a>
                                    <div class="add-button"><span class="plus-icon"></span></div>
                                </div>
                            </div>
                            <div class="button-right highlight-video-button">
                                <button type="reset" class="btn btn-primary">Discard</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{{ asset('js/app.js') }}}"></script>
    </body>
</html>
