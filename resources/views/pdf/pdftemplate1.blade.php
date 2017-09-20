<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<style>
        @font-face {
            font-family: 'Oxygen', sans-serif;
            src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
        }
    	html,body {
    		margin: 0px;
            font-family: 'Oxygen', sans-serif;
			color: #043241;
    	}
    	.page-break {
    	    page-break-after: always;
    	}
		.break-word {
		 	word-wrap: break-word;
		}
    	@page {
    		margin: 0px;
    	}
		.font-sans {
  			font-family: 'Source Sans Pro', sans-serif;
		}

.timeline {
    position: relative;
    /*padding: 0px 0px 10px;*/
    /*margin-top: -25px;*/
	margin-left: 5px;
}

.timeline .line {
    /*position: absolute;
    width: 1px;
    display: block;
    background: #D6551A;
	top: 5px;
    bottom: 10px;
    margin-left: 5px;*/
}

.timeline .panel {
    /*position: relative;*/
    /*margin: 10px 0px 0px 0px;*/
    clear: both;
}

.timeline .panel .panel-heading.icon {
    position: absolute;
    left: -4px;
    top: 2px;
    display: block;
    width: 10px;
    height: 10px;
    /*padding: 0px;*/
    border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
    /*text-align: center;*/
    /*float: left;*/
    background-color: #D6551A;
    border: 0;
}

.timeline .panel .panel-heading.title {
    background-color: transparent;
    padding: 0;
    border: 0;
	line-height: 13px;
}

.timeline .panel-outline {
    border-color: transparent;
    background: transparent;
    box-shadow: none;
	/*padding: 0 0 20px 20px;*/
	padding-left: 20px;
	font-size: 14px;
	font-weight: bold;
	/*border-left: #D6551A 1px solid;*/
	margin-bottom: 20px;
}

.timeline .panel-outline .panel-body {
    padding: 0px;
	line-height: 15px;
}

.timeline2 {
    /*position: relative;*/
    /*padding: 21px 0px 10px;*/
    /*margin-top: -25px;*/
	/*display: inline-block;*/
}

.timeline2 .line {
    /*position: absolute;*/
    /*width: 1px;*/
	/*height: 1px;*/
	/*width: 100%;*/
    /*display: block;*/
    /*background: #D6551A;*/
    /*top: 36px;*/
    /*bottom: 10px;*/
    /*margin-left: 5px;*/
}

.timeline2 .panel {
    position: relative;
	/*vertical-align: top;*/
    /*margin: 10px 50px 0px 0px;*/
    /*clear: both;*/
	width: 210px;
	display: inline-block;
	vertical-align: top;
}

.timeline2 .panel .panel-heading.icon {
	position: absolute;
    left: 0px;
    top: -5px;
    display: block;
    width: 10px;
    height: 10px;
    border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
    background-color: #D6551A;
    border: 0;
}

.timeline2 .panel .panel-heading.title {
    background-color: transparent;
    padding-top: 10px;
    border: 0;
}

.timeline2 .panel-outline {
    border-color: transparent;
    background: transparent;
    box-shadow: none;
	padding-top: 5px;
	font-size: 14px;
	font-weight: bold;
	/*display: inline-block;*/
	/*vertical-align: top;*/
	border-top: #D6551A 1px solid;
	padding-right: 50px;
	margin-right: -5px;
}

.timeline2 .panel-outline:last-child {
	border-top: none;
}

.timeline2 .panel-outline .panel-body {
    padding: 0px;
}

	.header-container {
		background-color: #023240;
		height: 435px;
		position: relative;
	}

	.header-container .overlay {
		background-color: rgba(0, 0, 0, .4);
		position: absolute;
		width: 100%;
		height: 237px;
		z-index: 1;
	}

	.header-container .background {
		width: 760px;
		display: block;
		position: absolute;
		object-fit: cover;
		width: 100%;
		height: 203px;
	}

	.header-container .elements {
		width: 940px;
		display: block;
		position: absolute;
		/*right: 17px;*/
		left: -7px;
		right: 0;
		margin-left: auto;
		margin-right: auto;
		top: 151px;
		z-index: 2;
	}

	.header-container .intro {
		width: 320px;
		display: block;
		position: absolute;
		/*right: 285px;*/
		left: 0;
		right: 0;
		margin-left: auto;
		margin-right: auto;
		top: 42px;
		z-index: 2;
	}

	.header-container .avatar {
		width: 160px;
		height: 160px;
		display: block;
		position: absolute;
		/*right: 335px;*/
		left: 0;
		right: 0;
		margin-left: auto;
		margin-right: auto;
		top: 163px;
		z-index: 2;
		border-radius: 50%;
		/*border-radius: 120px;*/
	}

	.header-container span.name {
		position: absolute;
		color: #FFFFFF;
		font-size: 42px;
		left: 0;
		right: 0;
		top: 334px;
		margin: auto;
		font-weight: bold;
		text-align: center;
		z-index: 2;
	}

	.header-container span.school {
		position: absolute;
		color: #FFFFFF;
		left: 0;
		right: 0;
		top: 391px;
		margin: auto;
		font-size: 22px;
		font-weight: bold;
		text-align: center;
		z-index: 2;
	}

	.body-container {
		padding: 50px 80px 0px 80px;
	}

	h2 {
	   width: 100%;
	   border-bottom: 1px dashed #d65727;
	   line-height: 0.3em;
	   margin: 3px 0 17px;
	}

	h2 span {
		background: #fff;
		padding: 0 10px 0 0;
		color: #d65727;
		font-size: 12px;
		font-weight: normal;
	}

	div.lines {
	   width: 100%;
	   border-bottom: 1px dashed #d65727;
	   /*line-height: 0.3em;*/
	   /*margin: 3px 0 17px;*/
	   margin: 10px 0;
	   position: relative;
	}

	div.lines span {
		background: #fff;
		padding: 0 10px 0 0;
		color: #d6551a;
		font-size: 17px;
		font-weight: normal;
		position: absolute;
		top: -12px;
	}

	</style>
</head>
<body>
	<div style="width:992px;">
		<div class="header-container">
			<div class="overlay"></div>
			<div style="width: 100%;height: 237px;background-image: url({{ asset('img/journey-placeholder.png') }});background-size: cover;background-position: center center;background-repeat: no-repeat;position: absolute;"></div>
			<img src="" class="elements">
			<img src="{{asset('img/pdf/1IntroHello.png')}}" class="intro">
			<img src="{{asset('storage/avatar/')}}" class="avatar">
            <span class="name">Angelo bantiling</span>
            <span class="school">Student at UP</span>
		</div>
		<div class="body-container">

			<div class="break-word" style="margin-bottom:40px;">
				<div style="width:325px;display:inline-block;margin-right:35px;">
					<div style="height:10px;margin-bottom:10px;">
						<div class="lines">
							<span class="font-sans"><i>Personal Information</i></span>
						</div>
					</div>
					<div style="width:138px;display:inline-block;vertical-align:top;margin-right:20px;">
						<div style="width:35px;height:35px;margin-bottom:5px;">
							<img src="{{asset('img/pdf/number.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
						</div>
						<span class="font-sans" style="display:block;font-size:14px;"><i>Number</i></span>
						<span style="display:block;font-size:14px;font-weight:bold;">-</span>
					</div>
					<div style="width:138px;display:inline-block;vertical-align:top;">
						<div style="width:35px;height:35px;margin-bottom:5px;">
							<img src="{{asset('img/pdf/portfolio.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
						</div>
						<span class="font-sans" style="display:block;font-size:14px;"><i>Portfolio</i></span>
						<span style="display:block;font-size:14px;font-weight:bold;">http://www.classmade.com/sample#portfolio</span>
					</div>
					<div style="width:138px;display:inline-block;vertical-align:top;">
						<div style="width:35px;height:35px;margin-bottom:5px;">
							<img src="{{asset('img/pdf/email-address.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
						</div>
						<span class="font-sans" style="display:block;font-size:14px;"><i>E-mail address</i></span>
						<span style="display:block;font-size:14px;font-weight:bold;">angelo.taisondigital@gmail.com</span>
					</div>
				</div>

				<div style="width:195px;display:inline-block;vertical-align:top;margin-right:35px;">
					<div style="height:10px;margin-bottom:10px;">
						<div class="lines">
							<span class="font-sans"><i>Personal Skills</i></span>
						</div>
					</div>
					<div style="height:180px;">
						<div style="width:35px;height:35px;margin-bottom:5px;">
							<img src="{{asset('img/pdf/pro-skills.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
						</div>
	                     <span style="display:block;font-size:14px;font-weight:bold;margin-bottom:10px;">HTML</span>
	                     <span style="display:block;font-size:14px;font-weight:bold;margin-bottom:10px;">CSS</span>
	                     <span style="display:block;font-size:14px;font-weight:bold;margin-bottom:10px;">Jquery</span>
					</div>
				</div>

				<div style="width:232px;display:inline-block;vertical-align:top;">
					<div style="height:10px;margin-bottom:10px;">
						<div class="lines">
							<span class="font-sans"><i>Achievements</i></span>
						</div>
					</div>
					<div style="width:35px;height:35px;margin-bottom:5px;">
						<img src="{{asset('img/pdf/diplomasand-cert.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
					</div>

					<div class="timeline">
							<article class="panel panel-primary panel-outline">
							<div class="panel-heading icon"></div>
							<div class="panel-heading title">
								<span>Sample</span>
							</div>
							</article>
						</div>
				</div>
			</div>

			<div class="break-word" style="margin-bottom:40px;">
				<div style="height:10px;">
					<div class="lines">
						<span class="font-sans"><i>Personal Statement</i></span>
					</div>
				</div>
				<div style="width:35px;height:35px;margin-top:10px;">
					<img src="{{asset('img/pdf/personal-statement.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
				</div>
				<div style="display:block;font-size:14px;text-align:justify;">
					sample
				</div>
			</div>

			<div class="break-word">
				<div style="height:10px;">
					<div class="lines">
						<span class="font-sans"><i>Journey</i></span>
					</div>
				</div>
				<div style="width:35px;height:35px;margin-bottom:5px;margin-top:10px;">
					<img src="{{asset('img/pdf/journey.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
				</div>

				<div class="timeline2" style="display:inline-block;vertical-align:top;">
					<article class="panel panel-primary panel-outline">
							<div class="panel-heading icon"></div>
							<div class="panel-heading title">
								<span>sample}</span>
							</div>
							<div class="panel-body">
								<span>sample</span><br>
								<span>sample</span>
							</div>
					</article>
				</div>
				<div style="display:inline-block;vertical-align:top;position:relative;">
					<div style="position:absolute;top:-27px;right:110px">
						<img src="{{asset('img/pdf/1planeline.png')}}" alt="" height="30">
					</div>
					<div style="position:absolute;top:-44px;right:55px">
						<img src="{{asset('img/pdf/1plane.png')}}" alt="" height="30">
					</div>
				</div>
			</div>
		</div>

		<!-- <div style="">
			<img src="{{asset('img/pdf/design-footer.png')}}" alt="" style="object-fit:cover;width:100%;height:100%;">
		</div> -->

	</div>
</body>
</html>
