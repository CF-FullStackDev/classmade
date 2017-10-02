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

    	html, body, table {
    		margin: 0px;
            font-family: 'Oxygen', sans-serif;
			color: #043241;
    	}

		.container{
		 	position: relative;
		}

		.left{
			float: left;
		}

		.profile{
			width: 992px;
		}
		.header{
			height: 270px;
			background: #043241;
			display: block;
			position: relative;
		}
		.header .title{
			position: absolute;
			bottom: 10px;
			left: 290px;
			margin: 15px;
		}
		.header h1, .header p{
			background: #d35626;
			margin: 0;
			padding: 5px;
			color: #fff;
		}
		.header p{
			display: inline;
		}
		.header .avatar {
			height: 270px;
		    width: 270px;
		    position: relative;
		    margin: 0 0 0 -25px;
		    -webkit-transform: skew(-10deg);
		    -moz-transform: skew(-10deg);
		    -o-transform: skew(-10deg);
		    overflow: hidden;
		    position: relative;

		}
		
		.header .avatar .img {
			height: 270px;
		    width: 270px;
		    position: absolute;
		    left: 25px;
		    -webkit-transform: skew(10deg);
		    -moz-transform: skew(10deg);
		    -o-transform: skew(10deg);
		}

		.content{
			background: url('{{asset('img/pdf/active/pdf1.jpg')}}') no-repeat;
			background-position: 100%;
			height: 100%;
    		width: 100%;
		    min-height: 1100px;
		    background-size: cover;
		    background-position: 0px -318px;
		}

		.content .sidebar section {
		    margin-top: 160px;
    		padding-left: 70px;
		}
		.content section ul{
			list-style: none;
			margin: 0;
		}

		.content section.personal li{
			margin-bottom: 40px;
		}
		.content section.professional li{
			margin-bottom: 25px;
		}
		.content section.achievement li{
			margin-bottom: 19px;
		}

		.profile-link {
			position: absolute;
		    bottom: 92px;
		    left: 70px;
		    color: #fff;
		    font-size: 22px;
		    letter-spacing: 1px;
		}
		
	</style>
</head>
<body>
	<div class="profile">
	  <header class="header" style="background: url(http://localhost/classmade/public/img/profile-background-placeholder.png);">
		<div class="avatar left">
			<div class="img" style="background: url(http://localhost/classmade/public/img/profile-avatar.png); background-size: contain;"></div>
		</div>
		<div class="title">
			<h1>First Name Last Name</h1>
			<p>Student at the School of the Future</p>
		</div>
	  </header>
	  <div class="content">
	  	<div class="sidebar container left" style="width: 35%">
	  		<section class="personal" style="padding-top: 152px; margin: 0">
		  		<ul>
		  			<li>+639178000000</li>
		  			<li>alex.go@school.edu</li>
		  			<li>portfolio.classmade.edu/alex.go</li>
		  		</ul>
	  		</section>
	  		<section class="professional">
		  		<ul>
		  			<li>Data Analysis</li>
		  			<li>Data Research</li>
		  			<li>Web Programming</li>
		  			<li>Graphic Design</li>
		  		</ul>
	  		</section>
	  		<section class="achievement" style="margin-top: 86px; padding-left: 90px;">
		  		<ul>
		  			<li>
		  				Best in Attendance <br/>
		  				<span style="font-size: 11px;">mm/dd/yy</span>
		  			</li>
		  			<li>
		  				Congeniality Award <br/>
		  				<span style="font-size: 11px;">mm/dd/yy</span>
		  			</li>
		  			<li>
		  				White Card Holder <br/>
		  				<span style="font-size: 11px;">mm/dd/yy</span>
		  			</li>
		  		</ul>
	  		</section>
	  		<section style="margin-top: 290px;">
	  			<span class="profile-link">johnsodonline</span>
	  		</section>
	  	</div>
	  	<div class="main left" style="width: 65%">
	  		<section style="margin-top: 130px; margin-left: 60px; height: 800px;">
	  			Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 

	  			Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 

	  			Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
	  		</section>
	  		<section style="margin-top: 33px;">
	  			<table>
	  				<tr>
	  					<td style="padding-left: 55px">
	  						Elementary School <br />
	  						Elementary-High School <br />
	  						June '96 - March '08
	  					</td>
	  					<td>
	  						Woodridge School <br />
	  						Highschool <br />
	  						June '08 - March 09'
	  					</td>
	  					<td style="padding-left: 38px">
	  						Statefields <br />
	  						High School <br />
	  						June '08 - March 09'
	  					</td>
	  				</tr>
	  			</table>
	  		</section>
	  	</div>
	  </div>
	</div>
</body>
</html>
