<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
	<style>

		@font-face {
            font-family: 'Work Sans', sans-serif;
            src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
        }

    	html, body, table {
    		margin: 0px;
            font-family: 'Work Sans', sans-serif;
			color: #043241;
    	}

    	p { margin: 0; }

    	.container{
    		width: 1020px;
    		height: 1425px;
    		background: url(http://localhost/classmade/public/img/pdf/active/pdf2.jpg) no-repeat;
    		background-size: cover;
    		position: relative;
    	}

    	.cover {
    		background: url(http://localhost/classmade/public/img/profile-background-placeholder.png) no-repeat;
    		background-size: cover;
    		width: 100%;
    		height: 323px;
    		position: relative;
    	}

    	.avatar {
    		background: url(http://localhost/classmade/public/img/profile-avatar.png) no-repeat;
    		background-size: cover;
		    border: 6px #9c3a3b solid;
		    border-radius: 50%;
		    width: 240px;
		    position: absolute;
		    top: 35px;
		    left: 50%;
		    margin-left: -121px;
		    height: 240px;
    	}

    	.name {
    		color: #c11a1b;
    		text-align: center;
    		font-family: Verdana;
    	}

    	.school {
    		color: #c11a1b;
		    padding-left: 150px;
		    margin-top: -2px;
		    text-align: center;
    	}

    	table.info{
    		width: 75%;
    		margin: 0px auto;
    		margin-top:100px;
    	}
    	table.info tr td{
    		vertical-align: top;
    		text-align: center;
    	}

    	.achievements{
    		list-style: none;
    		padding: 0;
    	}
    	.achievements li{ margin-bottom: 10px; }
    	.achievements li span{ font-size: .9em; }

    	.personal p{ margin-top: 35px; }
    	.professional p{ margin-top: 15px; }

    	.statement {
    		width: 735px;
		    margin: 0px auto;
		    margin-top: 50px;
		    margin-bottom: 20px;
		    text-align: justify;
		    max-height: 380px;
		    overflow: hidden;
		    word-break: break-all;
		    padding: 0 20px;
    	}
    	.statement::before {
    		content: '';
		    display: inline-block;
		    height: 57px;
		    width: 280px;
		    float: left;
    	}

    	.bottom{
		    width: 76%;
		    margin: 0px auto;
    		margin-top: 140px;
    		font-size: .9em;
    	}
    	.bottom tr td{
    		vertical-align: top;
    	}

    	.visit {
		    text-align: center;
		    color: #c11a1b;
		    font-size: 1.2em;
		    padding-top: 30px;
    	}

	</style>
</head>
<body>
	<div class="container">
		<div class="cover">
			<div class="avatar"></div>
		</div>
		<h1 class="name">First Name Last Name</h1>
		<h2 class="school">The School of the Future</h2>
		<table class="info">
			<tr>
				<td width="39%" class="personal">
					<p>+63915000000</p>
					<p>go.alex@school.edu</p>
					<p>portfolio.classmade.com/go.alex</p>
				</td>
				<td width="34%" class="professional">
					<p>Playing Soccer</p>
					<p>Data Research</p>
					<p>Web Programmer</p>
					<p>Graphic Design</p>
				</td>
				<td>
					<ul class="achievements">
						<li>
							<p>Best In Attendance</p>
							<span>mm/dd/yyyy</span>
						</li>
						<li>
							<p>Congeniality Award</p>
							<span>mm/dd/yyyy</span>
						</li>
						<li>
							<p>White Card Holder</p>
							<span>mm/dd/yyyy</span>
						</li>
					</ul>
				</td>
			</tr>
		</table>
		<section class="statement">
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae 
	  		<br>
	  		<br>
  				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. venenatis vitae
		</section>
		<table class="bottom">
			<tr>
				<td width="24%">
					Elementary School <br />
					Elementary-High School <br />
					June '96 - March '08
				</td>
				<td width="21%">
					Woodridge School <br />
					Highschool <br />
					June '08 - March 09'
				</td>
				<td width="21%">
					Statefields <br />
					High School <br />
					June '08 - March 09'
				</td>
				<td width="35%" class="visit">
					<p>https://classmade.com/<br>go.alex</p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
