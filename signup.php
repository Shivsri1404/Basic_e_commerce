
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>e-commerce | signup</title>
	<style>
		.row-style{
			margin-top: 100px;
		}
		img{
			margin-top: 150px;
		}
		footer{
			margin-top: 130px;
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
			<div class="col-sm-2">
				<img src="img\sign.jpg" style="height:200px">
			</div>
			<div class="col-sm-5 col-sm-offset-4">
				<h2>SIGN UP</h2>
				<form method="POST">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required="True">	
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="True">	
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="True" pattern=".{8,}">	
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="number" name="number" placeholder="Number" required="True">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" name="city" placeholder="City" required="True">	
					</div>
					<div class="form-group">
						<input type="address" class="form-control" id="address" name="address" placeholder="Address" required="True">	
					</div>
						<button type="submit" value="submit" class="btn btn-primary" name="submit">submit</button>
				</form>
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
<script type="text/javascript">
	window.alert('Email Already Exist');
</script>

<?php
session_start();



	$con = mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
 if (isset($_POST['submit'])) {
 	//echo "request ok";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$number=$_POST['number'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);


       // // Hashing
       // $pass = password_hash($password, PASSWORD_DEFAULT);
       // $pass = $password;
    // Query1
		$errors =" ";
       $sql = "SELECT * FROM users WHERE email='$email' ";
       $query = mysqli_query($con,$sql);

       $email_count = mysqli_num_rows($query);

       if ($email_count>0) {
        //echo "Already Exist";
  ?>

  <?php
 
       }
       else{
	$user_signup_query="INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$number','$city','$address')";
$user_signup_submit=mysqli_query($con,$user_signup_query) or die(mysqli_error($con));
header("location:home.php");
      
}
}


?>