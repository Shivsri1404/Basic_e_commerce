<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>e-commerece | mobiles</title>
	<style>
		.row-style{
			margin-top: 60px;
		}
		img{
			height: 270px;
		}
		#img1{
			height: 214px!important;
		}
	
	body{
		padding:0;
		margin:0;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">E-Store</a>
			</div>
		<div  class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
			<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
		</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row row-style">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 1</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\images.jpg" class="img-responsive">
						</center>
						<p>Samsung Galaxy M31| 6GB RAM|₹17,999</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 2</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\Samsung guru.jpg" class="img-responsive">
						</center>
						<p>Samsung Guru 1200  (Gold)|₹17,00</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 3</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\phone.jpg" class="img-responsive" style="width: 175px">
						</center>
						<p>Nokia Touch & Type X3-02| Rs.6500</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row row-style">
			<div class="col-sm-4">				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 4</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\nokia.jpg" class="img-responsive" id="img1">
						</center>
						<p>Nokia E6 Touch And Type | Rs.4000</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">			
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 5</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\vivo.jpg" class="img-responsive">
						</center>

						<p>Vivo Y90 Black,16 GB 2 GB RAM|Rs.8000</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 6</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\mob.jpg" class="img-responsive" >
						</center>
						<p>Snexian Rock  (Blue) | Rs.2500</p>
						<a href="login.php" class="btn btn-primary btn-block">Order Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-xs-4">
				<center>
					<h4>Information</h4>
					<a href="about.php" style="color: white;">About Us</a><br>
					<a href="contact.php" style="color: white;">contact Us</a>
				</center>
			</div>
			<div class="col-xs-4">
				<center>
					<h4>My Account</h4>
					<a href="login.php" style="color: white;">Login</a><br>
					<a href="signup.php" style="color: white;">Signup</a>
				</center>
			</div>
			<div class="col-xs-4">
				<center>
					<h4>Contact Us</h4>
					<p>Contact: +91-123-000000</p>
				</center>
			</div>
		</div>
	</footer>



</body>
</html>