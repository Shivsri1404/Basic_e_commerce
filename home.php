<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>e-commerce | home</title>
	<style>
		.row-style{
			margin-top: 60px;
		}
		img{
			height: 270px;
		}
		#img1{
			height: 211px!important;
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
				<a href="home.php" class="navbar-brand">E-Store</a>
			</div>
		<div  class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row row-style">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>#1</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\images.jpg" class="img-responsive">
						</center>
						<p>Samsung Galaxy M31| 6GB RAM|₹17,999</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>#2</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\Samsung guru.jpg" class="img-responsive">
						</center>
						<p>Samsung Guru 1200  (Gold)|₹17,00</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>#3</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\phone.jpg" class="img-responsive" style="width: 175px">
						</center>
						<p>Nokia Touch & Type X3-02| Rs.6500</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
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
						<h4>#4</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\nokia.jpg" class="img-responsive" id="img1">
						</center>
						<p>Nokia E6 Touch And Type | Rs.4000</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">			
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>#5</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\vivo.jpg" class="img-responsive" id="img1">
						</center>

						<p>Vivo Y90 Black,16 GB 2 GB RAM|Rs.8000</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>#6</h4>
					</div>
					<div class="panel-body">
						<center>
						<img src="img\mob.jpg" class="img-responsive" >
						</center>
						<p>Snexian Rock  (Blue) | Rs.2500</p>
						<a href="cart.php" class="btn btn-primary btn-block">Add to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>