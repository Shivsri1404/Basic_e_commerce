<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>e-commerce | login</title>
	<style>
		.row-style{
			margin-top: 100px;
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
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>LOGIN</h4>
					</div>
					<div class="panel-body">
						<p class="text-warning">Don't have an account?<a href="signup.php"> Register</a></p>
						<form method="POST">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" id="name" name="email" required="True">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="True" pattern=".{8,}">	
							</div>
				<button type="submit" value="submit" class="btn btn-primary" name="submit">submit</button>
						<br><br>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<?php
session_start();
$con = mysqli_connect("localhost","root","","project") or die(mysqli_error($con));



// $email=mysqli_real_escape_string($con,$_POST['email']);
// $password=mysqli_real_escape_string($con,$_POST['password']);
// $user_signup_query="insert into users(email,password) values ($email','$password')";
// $user_signup_submit=mysqli_query($con,$user_signup_query) or die(mysqli_error($con));


if(isset($_POST['submit'])){
	//echo "request ok";
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email Search
    $email_search = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $dbpass = $email_pass['password'];
        // echo "$dbpass";
        // $pass_check = password_verify($password, $dbpass);

        if($password === $dbpass){
            // echo "Login oK";
		header("location:home.php");
        }
        else{
            echo "Password Wrong";
        }
    }
    else{
    	echo "No account with this email";
    }
   
}
else{
	// echo "no request";
}




?>