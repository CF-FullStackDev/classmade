<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>PDF2</title>
    <style>
        @font-face {
            font-family: 'Oxygen', sans-serif;
            src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
        }
        html,body {
            margin: 0px;
            font-family: 'Oxygen', sans-serif;
        }
        .break-word {
		 	word-wrap: break-word;
		}
        .header-container {
    		height: 318px;
    		position: relative;
    	}
        .header-container .overlay {
    		background-color: rgba(0, 0, 0, .4);
    		position: absolute;
    		width: 100%;
    		height: 318px;
    		z-index: 1;
    	}

    	.header-container .background {
    		width: 760px;
    		display: block;
    		position: absolute;
    		object-fit: cover;
    		width: 100%;
    		height: 260px;
    	}

        .timeline {
            position: relative;
            padding: 21px 0px 10px;
            margin-top: -25px;
            display: inline-block;
            width: 200px;
            margin-right: 10px;
			vertical-align: top;
        }

        .timeline .line {
            position: absolute;
            width: 1px;
            display: block;
            background: #D6551A;
            top: 45px;
            bottom: 10px;
            margin-left: 5px;
        }

        .timeline .panel {
            position: relative;
            margin: 10px 0px 0px 0px;
            clear: both;
        }

        .timeline .panel .panel-heading.icon {
            position: absolute;
            left: 0px;
            top: 6px;
            display: block;
            width: 11px;
            height: 11px;
            padding: 0px;
            border-radius: 50%;
            text-align: center;
            float: left;
            background-color: #D6551A;
            border: 0;
        }

        .timeline .panel .panel-heading.title {
            background-color: transparent;
            padding: 0;
            border: 0;
        }

        .timeline .panel-outline {
            border-color: transparent;
            background: transparent;
            box-shadow: none;
        	padding-left: 20px;
        	font-size: 17px;
        	font-weight: bold;
        }

        .timeline .panel-outline .panel-body {
            padding: 0px;
        }

        .timeline2 {
            position: relative;
            padding: 21px 0px 10px;
            margin-top: -20px;
        	display: inline-block;
        }

        .timeline2 .line {
            position: absolute;
            /*width: 1px;*/
        	height: 1px;
        	width: 100%;
            display: block;
            background: #D6551A;
            top: 36px;
            /*bottom: 10px;*/
            margin-left: 5px;
        }

        .timeline2 .panel {
            position: relative;
        	vertical-align: top;
            margin: 10px 50px 0px 0px;
            clear: both;
        	width: 130px;
        }

        .timeline2 .panel .panel-heading.icon {
            position: absolute;
            left: 0px;
            top: 0px;
            display: block;
            width: 11px;
            height: 11px;
            padding: 0px;
            border-radius: 50%;
            text-align: center;
            float: left;
            background-color: #D6551A;
            border: 0;
        }

        .timeline2 .panel .panel-heading.title {
            background-color: transparent;
            padding-top: 5px;
            border: 0;
        }

        .timeline2 .panel-outline {
            border-color: transparent;
            background: transparent;
            box-shadow: none;
        	padding-top: 15px;
        	font-size: 13px;
        	font-weight: bold;
        	display: inline-block;
        }

        .timeline2 .panel-outline .panel-body {
            padding: 0px;
        }

        .new-inbox {
            display: inline-block;
            position: relative;
            overflow: hidden;
            z-index: 0;
            padding: 1em 8em 16em 9em;
            top: 0px;
        }

        .new-inbox:after {
            content: '';
            position: absolute;
            height: 220px;
            width: 100%;
            transform-origin: 100% 0;
            transform: skew(-20deg);
            background: #ED7337;
            top: 0;
            z-index: -1;
            left: 0;
        }

        .container {
            overflow: hidden;
        }

        #parallelogram {
            height: 318px;
            margin: 0 0 0 0;
			width: 318px;
			-ms-transform: 100% 0;
			-ms-transform-origin: 100% 0;
			-webkit-transform: 100% 0;
			-webkit-transform-origin: 100% 0;
			transform: 100% 0;
			transform-origin: 100% 0;
            -webkit-transform: skew(-20deg);
            -moz-transform: skew(-20deg);
            -o-transform: skew(-20deg);
            overflow: hidden;
            position: relative;
        }

        .image {
            /*background: url('img/pdf/default.png');
            background-size: cover;
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);*/
        }

	</style>
</head>
<body>

    <div style="width:993px;">

        <div class="header-container" style="border-bottom:1px solid #c5cbcc;">
            <div class="overlay"></div>
            <!-- <img src="{{asset('img/pdf/4-59103217df5cf.png')}}" class="background"> -->
			<div style="width: 100%;height: 100%;background-image: url({{asset('storage/background/'.$user->profile_cover)}});background-size: cover;background-position: center center;background-repeat: no-repeat;position: absolute;">
			</div>
			<div class="container" style="position:absolute;z-index:2;">
		        <div id="parallelogram">
					<img src="{{asset('storage/avatar/'.$user->profile_photo)}}" style="-webkit-transform: skew(20deg);
					-moz-transform: skew(20deg);-o-transform: skew(20deg);width:378px;height:318px;">
		        </div>
		    </div>

			<div style="position:absolute;z-index:2;left:180px;">
				<div id="parallelogram" style="width:8px;margin-left:153px;background-color:#d55627;"></div>
			</div>

            <span style="position:absolute;z-index:2;bottom:47px;left:298px;display:inline-block;background-color:#d55627;color:#FFFFFF;font-weight:bold;font-size:50px;padding:0 5px 5px 5px;">
                {{ $user->first_name. ' ' .$user->last_name}}
            </span>
            <span style="position:absolute;z-index:2;bottom:14px;left:298px;display:block;background-color:#d55627;color:#FFFFFF;font-size:25px;padding:2px 5px;">
                Student at {{ $user_school->name }}
            </span>
        </div>

        <div style="margin-top:30px;display:inline-block;vertical-align:top;width:382px;">
            <div style="">
                <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-left:50px;padding-right:5px;">PERSONAL</span>
                <br>
                <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-left:50px;padding-right:5px;">INFORMATION</span>

                <!-- <div style="padding-left:50px;padding-top:20px;padding-bottom:15px;">
                    <div style="width:25px;height:25px;margin-bottom:5px;display:inline-block;">
                        <img src="{{asset('img/pdf/address.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:270px;" class="break-word">
                        <span style="display:block;font-size:11px;color:#d65727;">Address</span>
                        <span style="display:block;font-size:11px;font-weight:bold;">-</span>
                    </div>
                </div> -->

                <div style="padding-left:50px;padding-top:20px;padding-bottom:15px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/number.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:260px;" class="break-word">
                        <span style="display:block;font-size:15px;color:#d65727;">Number</span>
                        <span style="display:block;font-size:15px;font-weight:bold;">-</span>
                    </div>
                </div>

                <div style="padding-left:50px;padding-bottom:15px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/email-address.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:260px;" class="break-word">
                        <span style="display:block;font-size:15px;color:#d65727;">E-mail Address</span>
                        <span style="display:block;font-size:15px;font-weight:bold;">{{ $user->email }}</span>
                    </div>
                </div>

                <div style="padding-left:50px;padding-bottom:15px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/portfolio.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:260px;" class="break-word">
                        <span style="display:block;font-size:15px;color:#d65727;">Portfolio</span>
                        <span style="display:block;font-size:15px;font-weight:bold;">http://www.classmade.com/{{ strtolower($user->first_name.$user->last_name.$user->id) }}#portfolio</span>
                    </div>
                </div>

            </div>

            <div style="margin-top:20px;">
                <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-left:50px;padding-right:5px;">PROFESSIONAL</span>
                <br>
                <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-left:50px;padding-right:5px;">SKILLS</span>

                <div style="padding-left:50px;padding-top:20px;padding-bottom:15px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/pro-skills.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:260px;" class="break-word">
                        <span style="display:block;font-size:17px;font-weight:bold;">
							<?php $pdf_skill = explode(',', $user->profile_skill); ?>
		                    @foreach($pdf_skill as $skills)
		                        {{ $skills }}<br>
		                    @endforeach
                        </span>
                    </div>
                </div>
            </div>

			<div style="margin-top:20px;">
                <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-left:50px;padding-right:5px;">ACHIEVEMENTS</span>

                <div style="padding-left:50px;padding-top:20px;padding-bottom:15px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/diplomasand-cert.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;width:260px;" class="break-word">
						@foreach($certificate->slice(0, 3) as $cert)
							<div class="timeline">
								<article class="panel panel-primary panel-outline">
								<div class="panel-heading icon"></div>
								<div class="panel-heading title">
									<span>{{ $cert->certificate_type }}</span>
								</div>
								</article>
							</div>
						@endforeach
                    </div>
                </div>
            </div>

            <div style="margin-top:20px;">
                <span style="font-size:20px;color:#d55627;font-weight:bold;display:block;padding-left:50px;">Visit my Classmade for<br>more information at:</span>
                <span style="background-color:#d55627;color:#FFFFFF;font-size:24px;padding-left:50px;padding-right:5px;width:220px;display:inline-block;" class="break-word">
                    https://www.classmade.com/{{ strtolower($user->first_name.$user->last_name.$user->id) }}
                </span>
            </div>


        </div>

        <div style="margin-top:30px;display:inline-block;vertical-align:top;width:607px;">
            <div style="">
                <div style="text-align:right;">
                    <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-right:50px;padding-left:5px;display:inline-block;margin-right:-4px;">PERSONAL</span>
                    <br>
                    <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-right:50px;padding-left:5px;">STATEMENT</span>
                </div>

                <div style="padding-top:20px;">
                    <div style="width:35px;height:35px;margin-bottom:5px;display:inline-block;margin-right:3px;">
                        <img src="{{asset('img/pdf/personal-statement.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
                    </div>
                    <div style="display:inline-block;font-size:16px;text-align:justify;width:513px;vertical-align:top;">
						<?php
						 	$text = substr($user->profile_biography,0,2200);
							$paragraphs = explode(PHP_EOL, $text);
						?>
                        @foreach($paragraphs as $paragraph)
                            <span>{{{ $paragraph }}}</span><br>
                        @endforeach
                    </div>
                </div>
            </div>

            <div style="margin-top:20px;">
                <div style="text-align:right;">
                    <span style="background-color:#d55627;color:#FFFFFF;font-size:28px;padding-right:50px;padding-left:5px;display:inline-block;">JOURNEY</span>
                </div>

				<div style="width:35px;height:35px;display:inline-block;margin-right:3px;">
					<img src="{{asset('img/pdf/journey.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
				</div>

                <div class="timeline2" style="vertical-align:top;">
					<div class="line">
						<div style="position:absolute;top:-2px;right:0;width:175px;background-color:#FFFFFF;height:6px;"></div>
					</div>
					@foreach($journey->slice(0, 3) as $jour)
						<article class="panel panel-primary panel-outline">
							<div class="panel-heading icon"></div>
							<div class="panel-heading title">
								<span>{{ $jour->sch_name }}</span>
							</div>
							<div class="panel-body">
								<span>{{ $jour->journey_course }}</span><br>
								<span>{{ $jour->journey_from . ' - ' . $jour->journey_to }}</span>
							</div>
						</article>
					@endforeach
				</div>

            </div>

            <!-- <div style="margin-top:20px;">
                <div style="text-align:right;">
                    <span style="background-color:#d55627;color:#FFFFFF;font-size:18px;padding-right:50px;padding-left:5px;display:inline-block;">ACHIEVEMENTS</span>
                </div>
				@foreach($certificate as $cert)
					<div class="timeline">
	                    <article class="panel panel-primary panel-outline">
	                    <div class="panel-heading icon"></div>
	                    <div class="panel-heading title">
	                        <span>{{ $cert->certificate_type }}</span>
	                    </div>
	                    </article>
	                </div>
				@endforeach
            </div> -->

        </div>

        <!-- <img src="{{asset('img/pdf/design-footer.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;margin-top:20px;"> -->

    </div>

</body>
</html>
