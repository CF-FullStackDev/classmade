<html><head>
  <title>Sample</title>
  <link href="{{{ asset('img/pdf/assets/css/font-awesome.min.css') }}}" rel="stylesheet">
  <style type="text/css">
    *{
      padding:0;
      margin:0;
    }
     @charset  "UTF-8";
    @import  url(https://fonts.googleapis.com/css?family=Oxygen:400,300,700);
    @font-face {
        font-family: 'Oxygen', sans-serif;
        src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
    }

    body{
        font-family: 'Oxygen';
        line-height: 1.6;
        width: 100%;
        position: relative;
    }

    .pdf-row{
      width: 100%;
      display: block;
    }
    .pdf-wrapper{
      position: relative;
      background-color: #fff;
    }
    .pdf-media-left{
      background-color: #153343;
      width: 330px;
      position: fixed;
      height: 100%;
      page-break-after: always;
    }
    .pdf-media-left img{
      width: 100%;
    }
    .pdf-media-body{
      width: 600px;
      margin-left: 281px;
      position: relative;
      padding: 15px 5px 10px 5px;
      font-size: 14px;
    }
    .menu-container{
        position: relative;
        margin-top: 15px;
    }
    .menu-container .header{
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
        background-color: #1c4359;
        display: block;
    }
    .pdf-wrapper{
        width:810px;
    }
    .menu-container .header{
        position: relative;
    }
    .menu-container .header .address-icon{
        display: inline-block;
        position: absolute;
        left: 0px;
        height: 25px;
        width: 30px;
        background-color: #0993d0;
    }
    .menu-container .header .address-icon img{
        height: 18px;
        width: 23px;
        position: absolute;
        top: 3px;
        left: 5px;
    }
    .menu-container .header .portfolio-icon{
        display: inline-block;
        position: absolute;
        left: 0px;
        height: 25px;
        width: 30px;
        background-color: #5fb56f;
    }
    .menu-container .header .portfolio-icon img{
        height: 19px;
        width: 16px;
        position: absolute;
        top: 2px;
        left: 7px;
    }
     .menu-container .header .skills-icon{
        display: inline-block;
        position: absolute;
        left: 0px;
        height: 25px;
        width: 30px;
        background-color: #8b5fa1;
    }
    .menu-container .header .skills-icon img{
        height: 15px;
        width: 15px;
        position: absolute;
        top: 5px;
        left: 7px;
    }
    .menu-container .header span{
        padding: 2px;
        display: block;
        width: 80%;
        margin-left: 35px;
    }
    .menu, .menu-skills{
        display: block;
        color: #fff;
        font-family: 'Oxygen';
        font-size: 14px;
        margin-bottom: 15px;
    }
    .menu-item{
        display: block;
        padding: 10px;
    }
    .menu-item .icon{
        display: inline-block;
        float:left;
        width: 19px;
        height: 19px;
    }
    .menu-item .icon img{
        margin-top: 2px;
    }
    .menu-item span{
         left: 8px;
         position: relative;
         word-wrap: break-word;
         padding-right: 20px;
         display: block;
    }
    .menu-skills .menu-item span:before{
      content:'- ';
    }
    .menu-skills .menu-item {
      margin-left: 10px;
    }
    .info-name{
      font-size: 30px;
      color: #133242;
      line-height: 35px;
      font-weight: bold;
      text-transform: uppercase;
    }
    .info-school{
      color: #3097D1;
      display: block;
      font-weight: bold;
    }
    .info-bio{
      text-overflow: ellipsis;
      overflow: hidden;
      display: block;
      margin: 20px 0px;
      font-size: 13px;
      text-align: justify;
    }
    .timeline-journey{
      padding-top: 25px;
    }
    .timeline-diploma .content .line{
      z-index: 1;
      height: 100%;
      position: absolute;
      width: 3px;
      display: block;
      background: #E4E9EF;
      top: -19px;
      margin-left: 7px;
      height: 100%;
    }
    .timeline-journey .content .line{
      z-index: 1;
      height: 100%;
      position: absolute;
      width: 3px;
      display: block;
      background: #E4E9EF;
      top: -19px;
      margin-left: 7px;
      height: 100%;
    }
    .timeline-diploma .content, .timeline-journey .content{
      position: relative;
    }
    .timeline-diploma .title ,.timeline-journey .title{
        position: relative;
        margin-bottom: 5px;
    }
    .timeline-diploma .timeline-content .icon{
        display: inline-block;
        border-radius: 50%;
        padding: 4px;
        width: 7px;
        height: 7px;
        background-color: red;
        position: absolute;
        left: -25px;
        top: 7px;
        z-index: 2;
        background-color: #3097D1;
    }
    .timeline-journey .timeline-content .icon{
        display: inline-block;
        border-radius: 50%;
        padding: 4px;
        width: 7px;
        height: 7px;
        background-color: red;
        position: absolute;
        left: -26px;
        top: 7px;
        z-index: 2;
        background-color: #5fb56f;
    }
    .timeline-diploma .title img,.timeline-journey .title img{
        font-size: 18px;
        color: #133242;
        font-weight: bold;
        text-transform: uppercase;
        margin-left: 25px;
        position: absolute;
        left: -30px;
        top: 1px;
        z-index: 2;
    }
    .timeline-diploma .title span{
        font-size: 18px;
        color: #133242;
        font-weight: bold;
        text-transform: uppercase;
        /*margin-left: 10px;*/
    }
    .timeline-journey .title span{
        font-size: 18px;
        color: #133242;
        font-weight: bold;
        text-transform: uppercase;
        /*margin-left: 10px;*/
    }
    .timeline-diploma .content  .timeline-content{
      margin-left: 26px;
      margin-top: 30px;
      position: relative;
    }
    .timeline-journey .content  .timeline-content{
      margin-left: 26px;
      margin-top: 30px;
      position: relative;
    }
    .timeline-diploma .timeline-content .title{
         font-size: 1.2em;
         font-weight: bold;
         color: #3097D1;
         margin-bottom: 5px;
         display: block;
    }
    .timeline-journey .timeline-content .title{
         font-size: 1.2em;
         font-weight: bold;
         color: #5fb56f;
         margin-bottom: 5px;
         display: block;
    }
    .timeline-journey .timeline-content{
         page-break-inside: avoid;
    }

    .page-break{
        page-break-after: auto;
    }

    .sub-list {
        padding: 8px 15px;
    }

    .sub-list > p {
        padding-left: 18px;
        position: relative;
        word-break: break-all;
    }

    .sub-list > p > i {
        position: absolute;
        left: 0;
        top: 5px;
    }
  </style>
</head>
<body>
  <div class="pdf-wrapper">
    <div class="pdf-row">
       <div class="pdf-media-left" style="width: 250px;">
        <img src="{{asset('storage/avatar/'.$user->profile_photo)}}">
        <div class="menu-container">
            <div class="header">
                <div class="address-icon"><i class="fa fa-address-card" style="font-size:20px;padding-left:3px;padding-top:2px;"></i></div>
                <span>PERSONAL INFO</span>
            </div>
            <div class="menu">
                <!-- <div class="sub-list">
                    <p><i class="fa fa-map-marker"></i> <span>-</span></p>
                </div> -->
                <div class="sub-list">
                    <p><i class="fa fa-phone"></i> <span>-</span></p>
                </div>
                <div class="sub-list">
                    <p><i class="fa fa-envelope"></i> <span>{{ $user->email }}</span></p>
                </div>
            </div>
            <div class="header">
                <div class="portfolio-icon" style="text-align:center"><i class="fa fa-file-image-o" style="font-size:20px;padding-top:2px;"></i></div>
                <span>PORTFOLIO</span>
            </div>
            <div class="menu">
                <div class="sub-list">
                    <p><i class="fa fa-globe"></i> <span>http://www.classmade.com/{{ strtolower($user->first_name.$user->last_name.$user->id) }}#portfolio</span></p>
                </div>
            </div>
            <div class="header">
                <div class="skills-icon" style="text-align:center"><i class="fa fa-star" style="font-size:20px;padding-top:3px;"></i></div>
                <span>SKILLS</span>
            </div>
            <div class="menu-skills">
                <?php $pdf_skill = explode(',', $user->profile_skill); ?>
                @foreach($pdf_skill as $skills)
                    <div class="menu-item" style="padding-bottom:0px;">
                        <span>{{ $skills }}</span>
                    </div>
                @endforeach
            </div>
        </div>
      </div>

      <div class="pdf-media-body">
        <span class="info-name" class="" style="font-family: 'Oxygen'">{{ $user->first_name. ' ' .$user->last_name}}</span>
        <span class="info-school">Student at {{ $user_school->name }} | {{ $user_school->country }} </span>
        <span class="info-bio">
            <?php
                $text = substr($user->profile_biography,0,2200);
                $paragraphs = explode(PHP_EOL, $text);
            ?>
            @foreach($paragraphs as $paragraph)
                <span>{{{ $paragraph }}}</span><br>
            @endforeach
        </span>

        <div class="timeline-diploma page-break">
            <div class="title">
                <i class="fa fa-certificate" style="font-size:25px;color:#3097D1;margin-right:5px;"></i>
                <span>ACHIEVEMENTS</span>
            </div>
            <div class="content">
                <div class="line"></div>
                @foreach($certificate->slice(0, 3) as $cert)
                    <article class="timeline-content">
                        <div class="icon"></div>
                        <span class="title">{{ $cert->certificate_type }}</span>
                        <p class="content">{{ $cert->certificate_description }}</p>
                    </article>
				@endforeach
            </div>
        </div>

        <div class="timeline-journey">
            <div class="title">
                <i class="fa fa-graduation-cap" style="font-size:25px;color:#5FB56F;margin-right:5px;"></i>
                <span>Journey</span>
            </div>
            <div class="content">
                <div class="line"></div>
                @foreach($journey->slice(0, 3) as $jour)
                <article class="timeline-content">
                    <div class="icon"></div>
                    <span class="title">{{ $jour->sch_name }}</span>
                    <p class="content">{{ $jour->sch_description }}</p>
                </article>
                @endforeach
            </div>
        </div>

      </div>
      </div>
  </div>

</body>
</html>
