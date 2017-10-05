<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<style>

		@font-face {
            font-family: 'Source Sans Pro', sans-serif;
            src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
        }

    	html, body, table {
    		margin: 0px;
            font-family: 'Source Sans Pro', sans-serif;
			color: #043241;
			font-size: 16px;
    	}

    	p {
    		margin: 0;
    	}

    	.container {
    		width: 1015px;
    		height: 1435px;
    		background: url(http://localhost/classmade/public/img/pdf/artistic/pdf2.jpg) no-repeat;
    		background-size: contain;
    	}

    	.container section {
    		float: left;
    		font-size: 1.1em;
    		margin: 40px 40px 26px 40px;
    	}

    	.container section ul{
    		list-style: none;
    		padding: 0;
    		margin: 0;
    	}

    	.container section ul li{
    		margin-top: 20px;
    	}

    	.profile {
    		height: 673px;
    	}
    	.profile figure {
    		width: 390px;
    		height: 390px;
    		background: #fff;
		    margin: -3px 0 0 -3px;
		    border: 6px #ee8244 solid;
		    border-radius: 5px;
    	}

    	.profile h1 {
    		color: #000;
    		font-size: 2em;
    		font-family: Verdana;
    		margin: 10px 0;
    	}
    	.profile h5 {
    		font-size: 1.5em;
    		font-weight: normal;
    		margin: 10px 0;
    	}

    	.journey {
    		padding-top: 50px;
    		height: 218px;
    	}
    	
    	.journey ul li span.title {
    		font-size: 1.2em;
    	}
    	.journey ul li span.info {
    		font-size: .9em;
    	}
    	.journey ul li span.level {
    		margin-left: 105px;
    	}
    	.statement {
    		width: 340px;
		    margin-left: 105px;
		    margin-top: 70px;
		    text-align: justify;
    	}
	</style>
</head>
<body>
	<div class="container">
	  <section>
	  	<div class="profile">
	  		<figure>
	  			<img src="http://localhost/classmade/public/img/profile-avatar.png" style="display: block" width="100%">
	  		</figure>
	  		<h1>Last Name, <br>First Name</h1>
			<h5>Student at <br>The School of the Future</h5>
			<div>
				<p> +63915000000 </p>
				<p>go.alex@school.edu</p>
				<p>portfolio.classmade.com/go.alex</p>
			</div>
	  	</div>
	  	<div style="padding-top: 50px; height: 100px;">
	  		<p>data analysis / data research</p>
	  		<p>web programming / graphic design</p>
	  	</div>
	  	<div style="padding-top: 50px; height: 226px;">
	  		<ul>
	  			<li style="margin: 0">
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
	  	</div>
	  	<div class="journey">
	  		<ul>
	  			<li>
					<div class="title">Elizabeth Seton School</div>
					<span class="info">mm/dd/yyyy</span>
					<span class="level">elementary</span>
				</li>
				<li>
					<div class="title">Elizabeth Seton School</div>
					<span class="info">mm/dd/yyyy</span>
					<span class="level">high school</span>
				</li>
				<li>
					<div class="title">Elizabeth Seton School</div>
					<span class="info">mm/dd/yyyy</span>
					<span class="level">college</span>
				</li>
	  		</ul>
	  	</div>
	  </section>
	  <section>
	  	<div class="statement">
	  		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae 
  			<br>
	  		<br>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae 
	  	</div>
	  </section>
	</div>
</body>
</html>
