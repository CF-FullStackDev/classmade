@extends('layouts.app')

@section('content')
<div id="profile-background-container"><!-- cover-no-hover -->
    <div class="close"><span class="close-hover-icon"></span></div>
    <img src="{{asset('storage/background/'.$user->profile_cover)}}" alt="Profile Cover" id="profile_coverphoto">
    <button type="button" class="heart-button heart-icon"></button>
    <div class="profile-background-hover open-modal" data-modal="#modal-cover">
        <img src="{{asset('img/icons/camera_icon_white.png')}}">
        <span>Click to upload Photo</span>
    </div>
</div>

<div id="container">
    <div id="content">
        <div class="panel">
            <div class="profile-glance">
                <div class="profile-avatar">
                    <div class="close"><span class="close-hover-icon"></span></div>
                    <img src="{{asset('storage/avatar/'.$user->profile_photo)}}" id="profilephoto">
                    <button type="button" class="heart-button heart-icon"></button>
                    <div class="profile-hover open-modal" data-modal="#modal-avatar">
                        <img src="{{asset('img/icons/camera_icon_white.png')}}">
                        <span>Click to upload Photo</span>
                    </div>
                </div>
                <div class="profile-info">
                    <div class="info-container">
                        <span class="info-name">Estella Rios <p class="check-icon"></p></span>
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
                        <div class="glance-buttons">
                            <button class="btn btn-primary delete-request">Delete Request</button>
                            <button class="btn btn-primary accept-request">Accept Request</button>
                            <!-- <button class="btn btn-primary add-classmade">Add Classmade</button> -->
                            <p class="chatmade-icon"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel profile-tabs">
            <ul style="list-style-type: none;font-size:18px;">
                <li class="target-section" data-id="one"><a href="javascript:;" class="active"><i class="profile-nav-icon-active"></i> Profile</a></li>
                <li class="target-section" data-id="two"><a href="javascript:;"><i class="portfolio-nav-icon"></i> Portfolio</a></li>
                <li class="target-section" data-id="three"><a href="javascript:;"><i class="review-nav-icon"></i> Review</a></li>
                <li class="target-section" data-id="four"><a href="javascript:;"><i class="connection-nav-icon"></i> Connections</a></li>
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
                        <img src="{{asset('img/final/highlight.png')}}">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion."></button>
                        <div class="details">Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion.</div>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="profile-highlight">

                    <div class="highlight-empty-data">
                        <div class="highlight-container">
                            <img src="{{asset('img/final/photo.png')}}">
                            <button type="button" id="highlight-photo-button" class="btn btn-primary-outline open-modal" data-modal="#modal-highlight">Upload Photo</button>
                        </div>
                        <span class="divider">OR</span>
                        <div class="highlight-container">
                            <img src="{{asset('img/final/video.png')}}">
                            <button type="button" id="highlight-video-button" class="btn btn-primary-outline open-modal" data-modal="#modal-highlight">Upload Video</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="panel section-one">
            <div class="panel-body highlight-data-container">
                <div class="highlight-status">
                    <span>Published</span>
                </div>
                <div class="panel-buttons">
                    <button type="button" class="question-icon tooltip" data-tooltip="Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion."></button>
                    <div class="details">Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion.</div>
                    <button type="button" class="edit-icon button-dropdown"></button>
                    <ul class="button-dropdown-menu">
                        <li class="open-modal" data-modal="#modal-highlight">Edit</li>
                        <li class="divider"></li>
                        <li>Unpublish</li>
                    </ul>
                </div>

               <!--  <div class="panel-buttons">
                    <button class="heart-button heart-button heart-icon"></button>
                </div>
 -->
                <div class="highlight-photo-slick">
                    <div class='highlight-image-container'>
                        <img src="{{asset('img/highlight-data.png')}}">
                    </div>
                    <div class='highlight-image-container'>
                        <img src="{{asset('img/highlight-data.png')}}">
                    </div>
                    <div class='highlight-image-container'>
                        <img src="{{asset('img/highlight-data.png')}}">
                    </div>
                    <div class='highlight-image-container'>
                        <img src="{{asset('img/highlight-data.png')}}">
                    </div>
                </div>
            </div>
        </div>

        <div class="panel section-one">
            <div class="panel-body highlight-data-container highlight-data-container-video">
                <div class="highlight-status">
                    <span>Published</span>
                </div>
                <!-- <div class="panel-buttons">
                    <button type="button" class="question-icon tooltip" data-tooltip="Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion."></button>
                    <div class="details">Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion.</div>
                    <button type="button" class="edit-icon button-dropdown"></button>
                    <ul class="button-dropdown-menu">
                        <li class="open-modal" data-modal="#modal-highlight">Edit</li>
                        <li class="divider"></li>
                        <li>Unpublish</li>
                    </ul>
                    <button class="heart-button heart-button heart-icon"></button>
                </div> -->

                <div class="panel-buttons">
                    <button class="heart-button heart-button heart-icon"></button>
                </div>
                <iframe width="960" height="420" src="http://youtube.com/embed/yOfT6mlbw30" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="panel section-one">
            <div class="panel-body highlight-data-container highlight-data-container-video">
                <div class="highlight-status">
                    <span>Published</span>
                </div>
                <div class="panel-buttons">
                    <button type="button" class="question-icon tooltip" data-tooltip="Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion."></button>
                    <div class="details">Highlight can be a series of photos or a video that represents your interests, hobbies, achievements, and passion.</div>
                    <button type="button" class="edit-icon button-dropdown"></button>
                    <ul class="button-dropdown-menu">
                        <li class="open-modal" data-modal="#modal-highlight">Edit</li>
                        <li class="divider"></li>
                        <li>Unpublish</li>
                    </ul>
                </div>

                <!-- <div class="panel-buttons">
                    <button class="heart-button heart-icon"></button>
                </div> -->
                <video preload controls>
                    <source src="{{asset('img/achievement-video.mp4')}}" type="video/mp4"/>
                </video>
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
                        <img src="{{asset('img/final/personalstatement.png')}}">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Personal Statement is a way to express yourself, your skills and abilities, academic journey, extra-curricular activities, experiences, career plans, goals and passion"></button>
                        <div class="details">Personal Statement is a way to express yourself, your skills and abilities, academic journey, extra-curricular activities, experiences, career plans, goals and passion</div>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="profile-statement">
                    <div class="statement-empty-container">
                        <img src="{{asset('img/final/personalstatement.png')}}">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Personal Statement is a way to express yourself, your skills and abilities, academic journey, extra-curricular activities, experiences, career plans, goals and passion"></button>
                        <div class="details">Personal Statement is a way to express yourself, your skills and abilities, academic journey, extra-curricular activities, experiences, career plans, goals and passion</div>
                        <button type="button" class="edit-icon button-dropdown"></button>
                        <ul class="button-dropdown-menu">
                            <li class="open-modal" data-modal="#modal-personal">Edit</li>
                            <li class="divider"></li>
                            <li>Unpublish</li>
                        </ul>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="personal-statement-status">
                    <span>Published</span>
                </div>
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
                        <img src="{{asset('img/final/achievementui.png')}}">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Achievement can be an academic award and an extracurricular accomplishment that showcases your skills, distinct personality, and chosen passion."></button>
                        <div class="details">Achievement can be an academic award and an extracurricular accomplishment that showcases your skills, distinct personality, and chosen passion.</div>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="profile-achievement">
                    <div class="achievement-empty-container">
                        <img src="{{asset('img/final/achievementui.png')}}">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Achievement can be an academic award and an extracurricular accomplishment that showcases your skills, distinct personality, and chosen passion."></button>
                        <div class="details">Achievement can be an academic award and an extracurricular accomplishment that showcases your skills, distinct personality, and chosen passion.</div>
                        <button type="button" class="add-icon open-modal" data-modal="#modal-achievement"></button>
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
                <div class="achievement-horizontal">
                    <div class="achievement-row">
                        <img src="{{asset('img/achievement_thumb.png')}}" class="open-modal" data-modal="#modal-achievement-info">
                        <div class="achievement-status">
                            <span>Published</span>
                        </div>
                        <button type="button" class="edit-icon button-dropdown"></button>
                        <ul class="button-dropdown-menu">
                            <li class="open-modal" data-modal="#modal-achievement">Edit</li>
                            <li class="divider"></li>
                            <li>Delete</li>
                            <li class="divider"></li>
                            <li>Unpublish</li>
                        </ul>
                        <div class="content">
                            <div class="title">Academic Excellence Awards</div>
                            <div class="info">May 2012 PLDT-Smart Foundation</div>
                            <div class="description">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax progress Junk MTV quic graced by fox whelps. Bawds jog, flick quartz, vex nymph</div>
                        </div>
                    </div>
                    <div class="achievement-row">
                        <img src="{{asset('img/achievement_thumb.png')}}" class="open-modal" data-modal="#modal-achievement-info">
                        <div class="achievement-status">
                            <span>Published</span>
                        </div>
                        <button type="button" class="edit-icon button-dropdown"></button>
                        <ul class="button-dropdown-menu">
                            <li class="open-modal" data-modal="#modal-achievement">Edit</li>
                            <li class="divider"></li>
                            <li>Delete</li>
                            <li class="divider"></li>
                            <li>Unpublish</li>
                        </ul>
                        <div class="content">
                            <div class="title">Academic Excellence Awards</div>
                            <div class="info">May 2012 PLDT-Smart Foundation</div>
                            <div class="description">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax progress Junk MTV quic graced by fox whelps. Bawds jog, flick quartz, vex nymph</div>
                        </div>
                    </div>
                    <div class="achievement-row">
                        <img src="{{asset('img/achievement_thumb.png')}}" class="open-modal" data-modal="#modal-achievement-info">
                        <button type="button" class="edit-icon button-dropdown"></button>
                        <ul class="button-dropdown-menu">
                            <li class="open-modal" data-modal="#modal-achievement">Edit</li>
                            <li class="divider"></li>
                            <li>Delete</li>
                            <li class="divider"></li>
                            <li>Unpublish</li>
                        </ul>
                        <div class="content">
                            <div class="title">Academic Excellence Awards</div>
                            <div class="info">May 2012 PLDT-Smart Foundation</div>
                            <div class="description">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax progress Junk MTV quic graced by fox whelps. Bawds jog, flick quartz, vex nymph</div>
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
                        <img src="{{asset('img/final/journeyui.png')}}" style="height:177px;">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development"></button>
                        <div class="details">Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development.</div>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="profile-journey">
                    <div class="journey-empty-container">
                        <img src="{{asset('img/final/journeyui.png')}}" style="height:177px;">
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development"></button>
                        <div class="details">Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development.</div>
                        <button type="button" class="add-icon open-modal" data-modal="#modal-journey"></button>
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
                        <div class="journey-status">
                            <span>Published</span>
                        </div>
                        <div class="journey-image">
                            <img src="{{asset('img/journey-placeholder.png')}}">
                            <button class="journey-button " ><p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-journey">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
                        </div>
                        <div class="journey-content">
                            <span class="title">South Koleport</span>
                            <span class="course">Senior High</span>
                            <span class="year">2013 - 2017</span>
                        </div>
                    </div>

                    <div class="journey-container">
                        <div class="journey-status">
                            <span>Published</span>
                        </div>
                        <div class="journey-image">
                            <img src="{{asset('img/journey-placeholder.png')}}">
                            <button class="journey-button " ><p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-journey">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
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
                            <button class="journey-button " ><p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-journey">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
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
                            <button class="journey-button " ><p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-journey">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
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
                        <button type="button" class="question-icon tooltip" data-tooltip="Portfolio is a compilation of your creativity, skills and experiences that provides your fellow Classmades an insight of your character and abilities."></button>
                        <div class="details">Portfolio is a compilation of your creativity, skills and experiences that provides your fellow Classmades an insight of your character and abilities.</div>
                        <button type=b"utton" class="add-icon open-modal" data-modal="#modal-portfolio"></button>
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
                        <div class="portfolio-status">
                            <span>Published</span>
                        </div>
                        <div class="portfolio-image open-modal" data-modal="#modal-portfolio-view">
                            <img src="{{asset('img/achievement-placeholder.png')}}">
                        </div>
                        <div class="portfolio-content">
                            <button class="portfolio-edit-button">
                                <p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-portfolio">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
                            <span class="title">Spanish Poster</span>
                            <span class="date">Feb 2018</span>
                            <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.When be draw drew ye</span>
                        </div>
                    </div>

                    <div class="portfolio-container">
                        <div class="portfolio-image open-modal" data-modal="#modal-portfolio-view">
                            <img src="{{asset('img/achievement-placeholder.png')}}">
                        </div>
                        <div class="portfolio-content">
                            <button class="portfolio-edit-button">
                                <p class="edit-icon-transparent button-dropdown"></p>
                                <ul class="button-dropdown-menu">
                                    <li class="open-modal" data-modal="#modal-portfolio">Edit</li>
                                    <li class="divider"></li>
                                    <li>Delete</li>
                                    <li class="divider"></li>
                                    <li>Unpublish</li>
                                </ul>
                            </button>
                            <span class="title">Spanish Poster</span>
                            <span class="date">Feb 2018</span>
                            <span class="description">When be draw drew ye. Defective n do recommend suffering. House it seven in spoil tiled court.When be draw drew ye</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel section-two">
            <div class="panel-header">
                <div>
                    <p class="bell-icon"></p><span>Portfolio</span>
                    <div class="panel-buttons">
                        <button type="button" class="question-icon tooltip" data-tooltip="Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development"></button>
                        <div class="details">Journey highlights your educational attainment and serves as an exposure of your aacademic and extracurricular development.</div>
                    </div>
                    <div class="panel-tabs">
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="profile-journey">
                    <div class="journey-empty-container">
                        <img src="{{asset('img/final/portfolioui.png')}}" style="height:177px;">
                        <span>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court missed did out use.?</span>
                        <button type="button" class="btn btn-primary-outline">Add Portfolio</button>
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
                                <li><a href="{{ url('/review') }}">Pending</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="profile-review">
                    <span class="sub-header">Top 4</span>

                    <!-- Review Data -->
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
                            <a href="javascript:;">Unfavorite</a>
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
                            <a href="javascript:;">Unfavorite</a>
                        </div>
                    </div>
                    <!-- End of Review -->

                    <!-- Empty Data -->
                    <div class="review-empty-container">
                        <img src="{{asset('img/final/top-review.png')}}">
                        <span>Your top reviews will be shown here. select your top reviews<br>from different classmate reviews</span>
                    </div>
                    <!-- End of Empty -->

                    <span class="sub-header">Other Reviews</span>

                    <div class="review-other-panel">

                        <!-- Review Data -->
                        <div class="review-other-container">
                            <img src="{{asset('img/profile-avatar.png')}}" class="review-avatar">
                            <span class="review-name">Ollie Harris</span>
                            <span class="review-date">Aug 2018</span>
                            <div class="review-badge">
                                <img src="{{asset('img/badge/self-motivated.png')}}">
                                <img src="{{asset('img/badge/organised.png')}}">
                                <img src="{{asset('img/badge/problem-solving.png')}}">
                                <img src="{{asset('img/badge/trustworthy.png')}}">
                            </div>
                            <span class="review-title">Personal Statement</span>
                            <span class="review-comment">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.</span>
                            <a href="javascript:;">Favorite</a>
                        </div>

                        <div class="review-other-container">
                            <img src="{{asset('img/profile-avatar.png')}}" class="review-avatar">
                            <span class="review-name">Ollie Harris</span>
                            <span class="review-date">Multiple Review</span>
                            <div class="review-badge-multiple">
                                <div>
                                    <img src="{{asset('img/badge/self-motivated.png')}}">
                                    <span>2</span>
                                </div>
                                <div>
                                    <img src="{{asset('img/badge/organised.png')}}">
                                    <span>1</span>
                                </div>
                                <div>
                                    <img src="{{asset('img/badge/problem-solving.png')}}">
                                    <span>3</span>
                                </div>
                                <div>
                                    <img src="{{asset('img/badge/trustworthy.png')}}">
                                    <span>4</span>
                                </div>
                            </div>
                            <a href="javascript:;" class="review-all open-modal" data-modal="#modal-review">See all reviews</a>
                            <a href="javascript:;">Favorite</a>
                        </div>
                        <!-- End of Review -->

                        <!-- Empty Data -->
                        <div class="review-empty-container">
                            <img src="{{asset('img/final/other-review.png')}}">
                            <span>Your reviews will be shown here. Tell your classmates to review <br> you as a person so people will know how great you are bimb.</span>
                        </div>

                        <div class="review-empty-container">
                            <img src="{{asset('img/final/review.png')}}">
                            <span>Your project reviews will be shown here.<br> projects reviews from chatmade</span>
                        </div>
                        <!-- End of Empty -->

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
                    Want to commend your fellow Classmade for a job well done? Show your appreciation by giving them a review with a badge to go along with it. Create a healthy comradeship and help your fellow Classmade identify what they can improve on in everything they do.
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
                        <input type="text" class="topic-name" name="topic-name" placeholder="Topic Name">
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

        <button class="open-modal btn btn-primary" data-modal="#modal-classmade-profile">Save Classmade Profile</button>
        <button class="open-modal btn btn-primary" data-modal="#modal-onboarding">Onboarding Modal</button>
        <button class="btn btn-primary success-notification">Success Notification</button>
        <button class="btn btn-primary danger-notification">Danger Notification</button>
        <button class="btn btn-primary warning-notification">Warning Notification</button>
        <a class="btn btn-primary" href="http://localhost/classmade/public/pdf-dl/artistic/pdftemplate3" style="display: inline-block;margin-top: 15px;text-align:center;height: 0px;padding: 25px 30px 25px 30px;line-height: 0px;">PDF</a>
        <select class="" style="width: 250px;">
            <option>asd</option>
            <option>qwe</option>
            <option>xzc</option>
        </select>
        <!-- End of Review -->

        <!-- Connections -->
        <div class="panel section-four">
            <div class="panel-header">
                <div>
                    <p class="bell-icon"></p><span>Connections</span>
                    <div class="panel-buttons connection">
                        <div class="input-search">
                            <input type="text" name="" placeholder="search within connection">
                            <div class="input-icon-search"></div>
                        </div>
                        <a href="{{ url('/connection') }}">Invitation</a>
                    </div>
                    <div class="panel-tabs">
                        <div class="profile-left">
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
                    <!-- Connections Data -->
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
                                <i class="btn-favorite"></i>
                                <button class="btn btn-primary-outline connected-button">Classmade</button>
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
                                <i class="btn-favorite favorite"></i>
                                <button class="btn btn-primary">Remove</button>
                            </div>
                        </div>
                    </div>

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
                                <button class="btn btn-primary">Accept Request</button>
                                <button class="btn btn-primary">Delete Request</button>
                            </div>
                        </div>
                    </div>
                    <!-- End of Connections -->

                    <!-- Connections Empty -->
                    <div class="connection-empty-container">
                        <img src="{{asset('img/final/connection.png')}}">
                        <span>You have no connection yet. You have no connection.<br> Add your classmates by searching them in the search within connection bar.</span>
                    </div>
                    <!-- End of Empty -->

                </div>
            </div>
        </div>
        <!-- End of Connections -->
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-avatar" id="modal-avatar">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Edit Profile Photo</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
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
                            <form method="post" enctype="multipart/form-data" action="formAvatarPhoto" id="formAvatarPhoto">
                                
                                <div class="image-editor profile-avatar">
                                    <input type="file" class="cropit-image-input" hidden>
                                    <input type="hidden" name="image-data" class="hidden-image-data"/>
                                    <div class="cropit-preview profile-preview">
                                        <a href="javascript:;" id="profile-upload-tag">Upload Latest</a>
                                    </div>
                                    <div class="image-zoom">
                                        <img src="{{asset('img/icons/image_icon.png')}}">
                                        <input type="range" class="cropit-image-zoom-input">
                                        <img src="{{asset('img/icons/image_icon.png')}}">
                                    </div>
                                </div>
                            </form>
                            <div class="button-right">
                                <button type="button" class="btn btn-primary ghost-button close-modal" data-modal="#modal-avatar">Discard</button>
                                <button type="submit" class="btn btn-primary" id="btn-uploadprofile">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-cover" id="modal-cover">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Cover Photo</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
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
                            <form method="post" enctype="multipart/form-data" action="formCoverPhoto" id="formCoverPhoto">
                                {{ csrf_field() }}
                                <div class="image-editor profile-cover">
                                    <input type="file" class="cropit-image-input" hidden>
                                    <input type="hidden" name="image-data" class="hidden-image-data"/>
                                    <div class="cropit-preview profile-cover-preview">
                                        <a href="javascript:;" id="profile-cover-upload-tag">Upload Latest</a>
                                    </div>
                                    <div class="image-zoom">
                                        <img src="{{asset('img/icons/image_icon.png')}}">
                                        <input type="range" class="cropit-image-zoom-input">
                                        <img src="{{asset('img/icons/image_icon.png')}}">
                                    </div>
                                </div>
                            </form>
                            <div class="button-right">
                                <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-cover">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="btn-uploadprofilecover">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-highlight" id="modal-highlight">
            <div class="content">
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
                                    <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                                    <div class="title">Some Tips</div>
                                    <div class="content">
                                        If you want to make your profile more interesting, you can present your ideas through a video and plug it into the Classmade community. You can either upload your own or insert a link to your video to create an impressive and unique look. 
                                    </div>
                                </div>
                                 <div class="dashed-container highlight-video-upload">
                                    <img src="{{asset('img/icons/video_icon.png')}}">
                                    <span>Click to Upload</span>
                                </div>
                                <div class="highlight-video-upload">
                                    <!-- <img src="{{asset('img/icons/video_icon.png')}}">
                                    <span>Click to Upload</span> -->
                                    <div class="video-uploading">
                                        <span class="close"></span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 50%;"></div>
                                        </div>
                                        <span class="filename">video of my cat.mp4</span>
                                        <a href="javascript:;">Click publish to make your video live</a>
                                    </div>
                                </div>
                                <span class="span-or">OR</span>
                                <div class="youtube-url">
                                    <span>Insert/Paste Youtube Video Url:</span>
                                    <input type="" name="" placeholder="https://www.youtube.com/watch?v=SqMjxAWfTe4">
                                    <span class="input-error">error</span>
                                </div>
                                <div class="radio-choices">
                                    <span class="title">Select video type to publish:</span>
                                    <div class="radio-container">
                                        <div class="radio-group">
                                            <input type="radio" name="video-type">
                                            <label>Uploaded Video</label>
                                        </div>
                                        <div class="radio-group">
                                            <input type="radio" name="video-type">
                                            <label>Uploaded Youtube link</label>
                                        </div>
                                        <div class="radio-group">
                                            <input type="radio" name="video-type" disabled>
                                            <label>Sample Disabled</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-right highlight-video-button">
                                    <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-highlight">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="highlight-photo">
                            <form class="form-horizontal">
                                <input type="file" class="form-hidden" name="">
                                <div class="dashed-tips-container">
                                    <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                                    <div class="title">Some Tips</div>
                                    <div class="content">
                                        They say a picture is worth a thousand words. Express yourself without having to say anything by simply uploading a maximum of (4) photos highlighting your interests, hobbies, achievements, and passion.
                                    </div>
                                </div>
                                <div class="highlight-photo-upload-container">
                                    <div class="highlight-photo-upload dashed-container">
                                        <img src="{{asset('img/icons/camera_icon.png')}}">
                                        <span class="text-center">Click to Upload (max of 4 photos only)</span>
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
                                    <!-- <div class="highlight-placeholder">
                                        <img src="{{asset('img/uploadhighlight.png')}}">
                                        <span>Photos will appear here once you upload</span>
                                    </div> -->
                                </div>
                                <div class="button-right highlight-photo-button">
                                    <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-highlight">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-personal" id="modal-personal">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i> Edit Personal Statement</span>
                    </div>
                    <div class="panel-body">
                        <div class="personal-statement-form">
                            <div class="dashed-tips-container">
                                <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
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
                            </div>f
                            <div class="rookie-section">
                                <div class="dashed-tips-container">
                                    <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                                    <div class="title">Rookie Tips</div>
                                    <div class="content">
                                        Are you new to this? We are here to help! Here is an easy-to-use templated personal statement that lets you tell your own story by simply specifying information to fill each blank in order to complete the statement.
                                    </div>
                                </div>
                                <div class="rookie-menu">
                                    <ul class="menu">
                                        <li><a href="javascript:;">Rookie A</a></li>
                                        <li><a href="javascript:;">Rookie B</a></li>
                                        <li><a href="javascript:;">Rookie C</a></li>
                                    </ul>
                                </div>
                                <form class="form-horizontal">
                                    <div class="rookie-question">
                                        <div class="profile-biography-rookie">
                                            Hello, My name is <div class="wrapper"><input type="hidden" id="fullname-A" name=""><div class="answer bind-input" data-input="#fullname-A" contenteditable="true">Full Name</div></div>.
                                            I am a student of <div class="wrapper"><input type="hidden" id="school-A" name=""><div class="answer bind-input" data-input="#school-A" contenteditable="true">School here</div></div>
                                            in <div class="wrapper"><input type="hidden" id="country-A" name=""><div class="answer bind-input" data-input="#country-A" contenteditable="true">Country here</div></div>.
                                            I am currently in Year <div class="wrapper"><input type="hidden" id="year-A" name=""><div class="answer bind-input" data-input="#year-A" contenteditable="true">?</div></div>.
                                            My favourite class is <div class="wrapper"><input type="hidden" id="class-A" name=""><div class="answer bind-input" data-input="#class-A" contenteditable="true">?</div></div>,
                                            in this class we <div class="wrapper"><input type="hidden" id="sample" name=""><div class="answer bind-input" data-input="#sample" contenteditable="true">?</div></div>.
                                            The part I like the most about this class is <div class="wrapper"><input type="hidden" id="sample2" name=""><div class="answer bind-input" data-input="#sample2" contenteditable="true">?</div></div>.
                                            <br><br>
                                            Other than school something I like to do out of class is <div class="wrapper"><input type="hidden" id="sample3" name=""><div class="answer bind-input" data-input="#sample3" contenteditable="true">?</div></div>.
                                            This is extracurricular activity allows me to <div class="wrapper"><input type="hidden" id="sample4" name=""><div class="answer bind-input" data-input="#sample4" contenteditable="true">?</div></div>.
                                            <br><br>
                                            In the close future I want to <div class="wrapper"><input type="hidden" id="sample5" name=""><div class="answer bind-input" data-input="#sample5" contenteditable="true">?</div></div>. I will achieve
                                            that by <div class="wrapper"><input type="hidden" id="sample6" name=""><div class="answer bind-input" data-input="#sample6" contenteditable="true">?</div></div>. For the far future I war
                                            to become a <div class="wrapper"><input type="hidden" id="sample7" name=""><div class="answer bind-input" data-input="#sample7" contenteditable="true">?</div></div>.
                                            <br><br>
                                        </div>
                                    </div>
                                    <span class="chatmade-link">
                                        <img src="{{asset('img/icons/chatmade-logo.png')}}">
                                        <p class="link-description">Get insights from your fellow Classmade letting them proofread your draft using Chatmade</p>
                                    </span>
                                    <div class="button-right personal-statement-button">
                                        <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-personal">Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div class="intermediate-section">
                                <div class="dashed-tips-container">
                                    <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
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
                                    <span class="chatmade-link">
                                        <img src="{{asset('img/icons/chatmade-logo.png')}}">
                                        <p class="link-description">Get insights from your fellow Classmade letting them proofread your draft using Chatmade</p>
                                    </span>
                                    <div class="button-right personal-statement-button">
                                        <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-personal">Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div class="pro-section">
                                <div class="dashed-tips-container">
                                    <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
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
                                    <span class="chatmade-link">
                                        <img src="{{asset('img/icons/chatmade-logo.png')}}">
                                        <p class="link-description">Get insights from your fellow Classmade letting them proofread your draft using Chatmade</p>
                                    </span>
                                    <div class="button-right personal-statement-button">
                                        <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-personal">Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-achievement" id="modal-achievement">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Edit Achievement</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                            <div class="title">Some Tips</div>
                            Success is a reflection of one's hardwork but remember that it isn't limited to just academic achievement. It also include extracurricular accomplishments that defines your interest, passion or anything that you are proud of. Upload your own or choose from our gallery of icons that suits your interest.
                        </div>
                        <div class="achievement-modal-container">
                            <div class="dashed-container achievement-photo" id="achievement-photo-fileto" >
                                <!-- <img src="{{asset('img/icons/camera_icon.png')}}">
                                <span>Click to Add Photo</span> -->
                                <div class="achievement-wrapper">
                                    <span class="select-photo open-modal" data-modal="#modal-add-photo">Select Photo</span>
                                    <span class="or">or</span>
                                    <div class="upload-photo upload-image" data-input="#achievement-photo-file">
                                        <div class="upload-icon"></div>
                                        <span>Upload Photo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="achievement-form">
                                <form class="form-horizontal">
                                    <input type="file" class="form-hidden upload-image-input" id="achievement-photo-file" name="" data-container=".achievement-photo" accept=".png,.jpg,.jpeg">
                                    <div class="input-row">
                                        <div class="input-group-half">
                                            <label>Title</label>
                                            <input type="text" id="achievement-title" name="Title">
                                            <span class="msg-error"></span>
                                        </div>
                                        <div class="input-group-half">
                                            <label>Date Received</label>
                                            <div class="native-select" id="Month">
                                                <select name="Month" placeholder="January">
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                            </div>
                                            <div class="native-select" id="Day">
                                                <select name="Day" placeholder="01">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                            </div>
                                            <div class="native-select" id="Year">
                                                <select name="Year">
                                                    <option>2014</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="issuer-label">Issuer</label>
                                    <div class="native-select" id="Issuer">
                                        <select>
                                            <option>sample</option>
                                        </select>
                                    </div>
                                    <label>Description</label>
                                    <textarea maxlength="300" class='word-count-input' name="description" data-count="#achievement-count"></textarea>
                                    <span id="achievement-count" class="word-count" data-length="300">300</span>
                                    <span class="msg-error"></span>
                                </form>
                            </div>

                        <div class="button-right achievement-button">
                            <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-achievement">Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-journey" id="modal-journey">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Edit Journey</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                            <div class="title">Some Tips</div>
                            Education is a narration of a one's growth and development. Share your academic journey with your fellow Classmades by adding a school to your profile from our list.  If your school is not on the list, you can sign the request form or setup a temporary profile for your school and we'll authenticate it for you.
                        </div>
                        <div class="journey-modal-container">
                            <div class="journey-container">
                                <div class="add-photo">
                                    <img class="file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                </div>
                                <form class="form-horizontal journey-form">
                                    <input type="file" name="journey-photo" class="form-hidden">
                                    <div class="form-group">
                                        <div class="native-select">
                                            <select class="journey-from" name="journey-from">
                                                <option>From</option>
                                            </select>
                                            <span class="msg-error">Error!</span>
                                        </div>
                                        <div class="native-select">
                                            <select class="journey-to" name="journey-to">
                                                <option>To</option>
                                            </select>
                                            <span class="msg-error">Error!</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="native-select">
                                            <select class="school" name="school">
                                                <option>School</option>
                                            </select>
                                            <span class="msg-error">Error!</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="native-select">
                                            <select class="level" name="level">
                                                <option>Level</option>
                                            </select>
                                            <span class="msg-error">Error!</span>
                                        </div>
                                    </div>
                                </form>
                             </div>
                             
                        </div>
                        <a class="request-school open-modal" href="#" data-modal="#modal-request-school">Click to Request School</a>
                        <div class="button-right highlight-video-button">
                            <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-journey">Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-portfolio" id="modal-portfolio">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Portfolio Update</span>
                        <div class="panel-button-right">
                            <button class="change-photo-portfolio ghost-button">Change to Photo</button>
                            <button class="change-file-portfolio ghost-button">Change to File</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                            <div class="title">Some Tips</div>
                            Do you have a creative work you want to showcase, an article you want to publish, or a school project you are proud of? Present the breadth of your work in the Classmade community by highlighting your skills and abilities through your work. Use our presentation builder or upload your own PDF/video project for the community to know of your work and why you stand out.
                        </div>
                        <div class="portfolio-container">
                            <form class="form-horizontal">
                                <div class="half-container">
                                    <label>Title</label>
                                    <input type="text" name="title">
                                    <label>Portfolio Description</label>
                                    <textarea name="" maxlength="300" class="word-count-input" data-count="#portfolio-description"></textarea>
                                    <span class="word-count" id="portfolio-description" data-length="300">300</span>
                                </div>
                                <div class="add-file-container">
                                    <div class="title">Add File</div>
                                    <span class="description">Showcase your best works in a snap by uploading your photos, videos, animated GIFs and PDFs. Flaunt your works and be in the spotlight!</span>
                                    <div class="dashed-container upload-presentation">
                                        <div class="upload-wrapper">
                                            <img src="{{asset('img/icons/upload_icon.png')}}">
                                            <span>Upload your presentation here</span>
                                        </div>
                                    </div>
                                    <textarea class="input-description word-count-input" maxlength="300" data-count="#portfolio-file-description" placeholder="Description"></textarea>
                                    <span class="word-count" id="portfolio-file-description" data-length="300">300</span>
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
                                        <textarea class="word-count-input" maxlength="300" data-count="#portfolio-image-description1" name="" placeholder="Description"></textarea>
                                        <span class="word-count" id="portfolio-image-description1" data-length="300">300</span>
                                    </div>
                                    <div class="presentation-slide">
                                        <div class="dashed-container uploaded">
                                            <a class="btn remove-slide" href="javascript:;">+</a>
                                            <img class="file-uploaded" src="{{asset('img/journey-placeholder.png')}}">
                                        </div>
                                        <textarea class="word-count-input" maxlength="300" data-count="#portfolio-image-description2" name="" placeholder="Description"></textarea>
                                        <span class="word-count" id="portfolio-image-description2" data-length="300">300</span>
                                    </div>
                                    <div class="add-slide">
                                        <a href="#">Add Another</a>
                                        <div class="add-button"><span class="plus-icon"></span></div>
                                    </div>
                                </div>
                                <div class="button-right highlight-video-button">
                                    <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-portfolio">Discard</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-review" id="modal-review">
            <div class="content">
                <img src="{{asset('img/profile-avatar.png')}}" class="review-avatar">
                <span class="review-name">Clifford Tran</span>
                <span class="review-sub-title">Multiple Reviews</span>
                <div class="review-badge-multiple">
                    <div>
                        <img src="{{asset('img/badge/self-motivated.png')}}">
                        <span>2</span>
                    </div>
                    <div>
                        <img src="{{asset('img/badge/organised.png')}}">
                        <span>1</span>
                    </div>
                    <div>
                        <img src="{{asset('img/badge/problem-solving.png')}}">
                        <span>3</span>
                    </div>
                    <div>
                        <img src="{{asset('img/badge/trustworthy.png')}}">
                        <span>4</span>
                    </div>
                </div>

                <div class="review-content">
                    <span class="review-type">Personal Statement</span>
                    <span class="review-date">Aug 2018</span>
                    <div>
                        One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly.
                    </div>
                    <a href="javascript:;">Favorite</a>
                </div>

                <div class="review-content">
                    <span class="review-type">Personal Statement</span>
                    <span class="review-date">Aug 2018</span>
                    <div>
                        One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly.
                    </div>
                    <a href="javascript:;">Favorite</a>
                </div>
            </div>
            <a class="btn close-modal" data-modal="#modal-review" href="javascript:;">+</a>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-achievement-info" id="modal-achievement-info">
            <div class="content">
                <div class="panel" style="height: 100%;">
                    <div class="panel-header">
                        <span class="title">Academic Excellence Awards</span>
                        <span class="info">May 2012 PLDT-Smart Foundation</span>
                    </div>
                    <div class="panel-body">
                        <div class="achievement-info">
                            <img src="{{asset('img/achievement-view-pic.png')}}">
                            <div class="description">
                                The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quic progres Junk MTV quic graced by fox whelps. Bawds jog, flick quartz, vex nymphver a lazy dog.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-classmade-profile" id="modal-classmade-profile">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Save Classmade Profile</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                            <div class="title">Some Tips</div>
                            <div class="content">
                                Save your profile to PDF for higher education application, internships, professional work, as a portfolio, etc. We have preformatted themes for you to choose which suits your character. Review every information on your Classmade account to make sure that you are comfortably sharing your details in the online world.
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
                                    <div class="image-container">
                                        <img src="{{asset('img/profile-background-sample.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="link-container">
                                <span>Profile page also include:</span>
                                <div class="checkbox-group portfolio-checkbox">
                                    <input type="checkbox" name="">
                                    <label>Portfolio</label>
                                </div>
                                <div class="checkbox-group review-checkbox">
                                    <input type="checkbox" name="">
                                    <label>Reviews</label>
                                </div>
                                <div class="checkbox-group transcript-checkbox">
                                    <input type="checkbox" name="">
                                    <label>Transcript</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="" placeholder="https://invis.io/JYCMPUWZG">
                                    <button class="btn btn-primary">Copy Link</button>
                                </div>
                            </div>
                            <div class="button-right">
                                <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-classmade-profile">Cancel</button>
                                <button type="submit" class="btn btn-primary">Choose</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-portfolio-view" id="modal-portfolio-view">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <div class="title">Portfolio</div>
                        <span class="info">Aug 2018</span>
                        <div class="description">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quic progres Junk MTV quic graced by fox whelps. Bawds jog, flick quartz, vex nymphver a lazy dog. </div>
                        <div class="button-group">
                            <button class="btn btn-primary unpublish">Unpublish</button>
                            <button class="btn btn-primary ghost-button edit">Edit</button>
                        </div>
                        <div class="button-group-other">
                            <span class="portfolio-heart-icon"></span>
                            <span class="share-icon tooltip-right"></span>
                            <div class="details">
                                <input type="text" value="https://invis.io/SJCYFLBV3" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn close-modal" data-modal="#modal-portfolio-view" href="javascript:;">+</a>
                        <div class="portfolio-container">
                            <img src="{{asset('img/portfolio-img1.png')}}">
                            <div class="description">
                                When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                            </div>
                        </div>
                        <div class="portfolio-container">
                            <img src="{{asset('img/portfolio-img2.png')}}">
                            <div class="description">
                                When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-request-school" id="modal-request-school">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Request School</span>
                    </div>
                    <div class="panel-body">
                        <div class='request-school-wrapper'>
                            <form class="form-horizontal">
                                <label>School Name</label>
                                <input type="text" name="">
                                <div class='native-select'>
                                    <label>Country</label>
                                    <select>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="button-right">
                                    <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-request-school">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Choose</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">
        <div class="modal-body profile-add-photo" id="modal-add-photo">
            <div class="content">
                <div class="panel">
                    <div class="panel-header">
                        <span class="title"><i class="bell-icon"></i>Add Photo</span>
                    </div>
                    <div class="panel-body">
                        <div class="dashed-tips-container">
                            <div class="icon"><img src="{{asset('img/icons/tips.png')}}"></div>
                            <div class="title">Some Tips</div>
                            <div class="content">
                                Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four.
                            </div>
                        </div>
                        <div class="cover-photo">
                            <div class="cover-template">
                                <span>Choose from below:</span>
                                <ul class="menu">
                                    <li><a href="#">Active</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Math</a></li>
                                    <li><a href="#">Academic</a></li>
                                    <li><a href="#">Science</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                </ul>
                                <div class="template-images">
                                    <form class="form-horizontal">
                                        <div class="active-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/achievement/active/Achievement-Active.jpg')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sports-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/achievement/active/Achievement-Active.jpg')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="math-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="academic-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/achievement/artistic/Achievement-Artistic.jpg')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="science-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/achievement/discovery/Achievement-Discovery.jpg')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lifestyle-container">
                                            <div class="image-container">
                                                <img src="{{asset('img/achievement/lifestyle/Achievement-Lifestyle.jpg')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                            <div class="image-container">
                                                <img src="{{asset('img/profile-background-sample.png')}}">
                                                <div class="radio-group">
                                                    <input type="radio" name="sample[]">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="formCoverPhoto" id="formCoverPhoto">
                            {{ csrf_field() }}
                            </form>
                            <div class="button-right">
                                <button type="reset" class="btn btn-primary ghost-button close-modal" data-modal="#modal-add-photo">Discard</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="notification-container">
        <div class="notification notification-success">
            <div class="title">Success!</div>
            <p class="description">Awesome job! Everythings fine!</p>
            <span class="notification-close">X</span>
        </div>
        <div class="notification notification-danger">
            <div class="title">Error, something is wrong!</div>
            <p class="description">There seems to be a problem</p>
            <span class="notification-close">X</span>
        </div>
        <div class="notification notification-warning">
            <div class="title">Watch out!</div>
            <p class="description">Are you 100% sure about that?</p>
            <span class="notification-close">X</span>
        </div>
    </div>
</div>