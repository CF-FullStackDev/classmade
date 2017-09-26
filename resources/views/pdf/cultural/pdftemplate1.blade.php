<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cultural</title>
	<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
	<style>
		body{
			font-family: 'Work Sans', sans-serif;
			padding: 0px;
			margin:0px;
		}
		.pdf-container{
			background-image: url('{{asset('img/pdf/Cultural-1.jpg')}}');
			width: 1020px;
			height: 1430px;
			background-size: contain;
			background-repeat: no-repeat;
		}
		.background-cover{
			height: 338px;
			width: 927px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			position: absolute;
			top: 0px;
    		left: 35px;
			background: #fff;
			z-index: 0;
		}

		.background-cover img{
			object-fit: cover;
			height: 344px;
			width: 927px;
			border: 5px solid #B57640;
			border-radius: 50px;
			border-top: none;
			border-radius: 50px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
		}

		.profile-photo{
			position: absolute;
			top: 131px;
    		left: 64px;
			border-radius: 150px;
			z-index: 1;
		}

		.profile-photo img{
			border-radius: 150px;
			height: 280px;
		    width: 280px;
    		border: 4px solid #B57640;
		    position: absolute;
		}

		.name{
			position: absolute;
			border: 3px solid #B57640;
			left: 362px;
			top: 195px;
			font-size: 38px;
			font-weight: 600;
			z-index: 1;
			border-radius: 20px;
			padding: 10px;
			background: #fff;
			width: 572px;
			padding: 6px 10px 6px 10px;

		}
		.school{
			position: absolute;
			left: 362px;
    		top: 270px;
			font-size: 28px;
			z-index: 1;
			border-radius: 50px;
			padding: 10px;
			background: #fff;
			width: 572px;
			padding: 6px 10px 6px 10px;
			border: 3px solid #B57640;
		}
		.telephone{
			position: absolute;
			left: 356px;
		    top: 332px;
		    font-size: 14px;
		    z-index: 1;
		    border: 3px solid #B57640;
		    border-radius: 20px;
			padding: 10px;
			background: #fff;
			width: 125px;
			padding: 8px 10px 8px 10px;
		}
		.email{
			position: absolute;
			left: 518px;
    		top: 330px;
		    font-size: 14px;
		    z-index: 1;
		    border: 3px solid #B57640;
		    border-radius: 20px;
			padding: 10px;
			background: #fff;
			width: 148px;
			padding: 10px 10px 10px 10px
		}
		.classmade-link{
			position: absolute;
			left: 699px;
    		top: 330px;
		    font-size: 14px;
		    z-index: 1;
		    border: 3px solid #B57640;
		    border-radius: 20px;
			padding: 10px;
			background: #fff;
			width: 240px;
			padding: 10px 10px 10px 10px;
		}
    </style>
</head>
<body>
	<div class="pdf-container">
		<div class="background-cover">
			<img src="{{asset('img/journey-placeholder.png')}}">
		</div>
		<div class="profile-photo">
			<img src="{{asset('img/profile-avatar.png')}}">
		</div>
		<span class="name">First Name Last Name</span>
		<span class="school">Student at the school of the future</span>
		<span class="telephone">+63915000000</span>
		<span class="email">go.alex@school.edu</span>
		<span class="classmade-link">portfolio.classmade.com/go.alex</span>
	</div>
</body>
</html>
