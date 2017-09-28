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
			background-image: url('{{asset('img/pdf/Cultural-2.jpg')}}');
			width: 1020px;
			height: 1430px;
			background-size: contain;
			background-repeat: no-repeat;
		}
		/*.background-cover{
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
		}*/

		/*.profile-photo{
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
		}*/
		.skill-list{
			position: absolute;
		    top: 474px;
		    left: 21px;
		    list-style: none;
		    line-height: 22px;
		    font-size: 16px;
		}
		.achievement-list{
			position: absolute;
		    top: 443px;
		    left: 289px;
		    list-style: none;
		    font-size: 18px;
		}
		.achievement-list li{
			margin-bottom: 25px;
		}
		.journey-list{
			position: absolute;
		    top: 443px;
		    left: 616px;
		    list-style: none;
		    font-size: 18px;
		}
		.journey-list li{
			margin-bottom: 25px;
		}
		.journey-list li .journey-school{
			line-height: 13px;
		}
		.journey-list li .year{
			font-size: 14px;
		}
		.personal-statement{
			float: left;
			position: relative;
			top: 800px;
		    left: 59px;
		    width: 900px;
		}
		.personal-statement:before{
			content:'';
			display: inline-block;
			height: 77px;
    		width: 351px;
			float: right;
		}
    </style>
</head>
<body>
	<div class="pdf-container">
		<!-- <div class="background-cover">
			<img src="{{asset('img/journey-placeholder.png')}}">
		</div>
		<div class="profile-photo">
			<img src="{{asset('img/profile-avatar.png')}}">
		</div>
		<span class="name">First Name Last Name</span>
		<span class="school">Student at the school of the future</span>
		<span class="telephone">+63915000000</span>
		<span class="email">go.alex@school.edu</span>
		<span class="classmade-link">portfolio.classmade.com/go.alex</span> -->
		<ul class="skill-list">
			<li>1. Data Analysis</li>
			<li>2. Data Research</li>
			<li>3. Web Programming</li>
			<li>4. Graphic Design</li>
		</ul>
		<ul class="achievement-list">
			<li>
				<div class="title">Best In Attendance</div>
				<span class="info">mm/dd/yyyy</span>
			</li>
			<li>
				<div class="title">Congeniality Award</div>
				<span class="info">mm/dd/yyyy</span>
			</li>
			<li>
				<div class="title">White Card Holder</div>
				<span class="info">mm/dd/yyyy</span>
			</li>
		</ul>
		<ul class="journey-list">
			<li>
				<div class="journey-school">School 1</div>
				<span class="year">(Year)</span>
			</li>
			<li>
				<div class="journey-school">School 2</div>
				<span class="year">(Year)</span>
			</li>
			<li>
				<div class="journey-school">School 3</div>
				<span class="year">(Year)</span>
			</li>
		</ul>
		<div class="personal-statement">
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae <br><br>

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
		</div>
	</div>
</body>
</html>
