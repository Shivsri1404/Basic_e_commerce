<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>e-commerce | contact</title>
	<style>
		.row-style{
			margin-top: 60px;
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
	<div class="container">
		<div class="row row-style">
			<div class="col-sm-9">
				<h2>LIVE SUPPORT</h2><br>

					<h4>24 hours | 7 days a week | 365 days a year Live Technical</h4><br>
					<p>Support It is a long esteblished foct that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nomal distribution of letters There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fom. by injected humour, or randomised words which don't look even slightly belevable, If you are going to use a of Lorem ipsum, you need to be sure there isn't anything embarassing hidden in the middle of text </p>
			</div>
			<div class="col-sm-3">
				<img src="img\customer.png" style="width: 270px">
			</div>
		</div>
		<div class="row row-style">
			<div class="col-sm-8">
				<h2>CONTACT US</h2>
				<form method="post" action="user_contact.php">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name" required="Trye">	
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" required="True">	
					</div>
					<div class="form-group">
						<label for="message">Message:</label><br>
						<textarea name="message" rows="4" cols="100" required="True"></textarea>
					</div>
					<button type="submit" name="button" class="btn btn-primary">submit</button>
				</form>
			</div>
			<div class="col-sm-4">
				<h2>Company Information :</h2><br>
				<p>SOU Lorem tostum Dolor Sit.<br>
				 22-56-2-9 Sit Amet, Lorem,<br>
				 USA<br>Phone:(00) 222 B58 444<Br>
				  Fax: (000) 000 00 00 0<br> Email: info@mycompany.com<br>
				Follow on: Facebook, Twitter</p>
			</div>
		</div>
	</div><br>
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

