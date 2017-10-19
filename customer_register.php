<!DOCTYPE html>

<?php
	session_start();
	include("functions/functions.php");
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>MRC GLOBAL</title>
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/shop-homepage.css" rel="stylesheet">
		
		<script src="//html5shim.googlecode.com/sbn/trunk/html5.js"></script>
		<script src="js/comment.js"></script>

	</head>

	<body>
	
	<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
	
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
					<img style="max-width:100px; margin-top: -7px;" src="images/brand.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href = "index.php">HOME </a> </li>
						<li><a href = "about.php">ABOUT US </a> </li>
						<li><a href = "feedback.php">FEEDBACK </a> </li>
				
						<li><a href = "customer/cus_acc.php">MY ACCOUNT </a> </li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				
			</div>
			<!-- /.container -->
		</nav>
		
		<div class="container">
			<div class ="row">
					<div class = "col-md-12" align = 'center'>
						<img id = "logo" src = "images/ad.jpg" height ="200" width = "1140"/>
					</div>		
			</div>
		</div>
		
		<div class="container">
			<div class = "row">
				<div class="col-md-3">
					<p class="lead" style = 'color:#00688B' align = 'center'>Categories</p>
					<div class="list-group">
					<?php
						getCategory();
					?>
					</div>
				</div>
				<div class="col-md-9">
					<div class = "row">
						<form method = 'post'>
							<h3 style = 'color:#00688B' class="form-signin-heading">Please create an account with us</h3>
							<div class="form-group">
								<label style = 'color:#00688B' for='name'>Name</label>
								<input type = "text" name = "name" class="form-control" placeholder="Name" required autofocus>
							</div>
											
							<div class="form-group">
								<label style = 'color:#00688B' for='email'>Email</label>
								<input type = "text" name = "email" class="form-control" placeholder="Email address" required >
							</div>
							
							<div class="form-group">
								<label style = 'color:#00688B' for='password'>Password</label>
								<input type = "password" name = "password" class="form-control" placeholder="Password" required >
							</div>
							
							<div class="form-group">
								<label style = 'color:#00688B' for='country'>Country</label>
								<input type = "text" name = "country" class="form-control" placeholder="Country" required >
							</div>
							
							<div class="form-group">
								<label style = 'color:#00688B' for='address'>Address</label>
								<textarea class='form-control' name = 'address'  id='comment' placeholder="Address" required></textarea>
							</div>
							
							<div class="form-group">
								<label style = 'color:#00688B' for='contact'>Contact:</label>
								<input type = "text" name = "contact" class="form-control" placeholder="Contact number" required >
							</div>
							
							<button type='submit' class='btn btn-info' name = "register">Create account</button>		
						</form>	
					</div>
				</div>
				
			</div>
		</div>
		
		
		<div class="container">
			<hr>
			<!-- Footer -->
			<footer>
				<div class="row" align = 'center'>
					
				</div>
			</footer>
		</div>
		
		
	</body>
</html>	

<?php
	if(isset($_POST["register"])){
		$ip = getIp();
		$name = $_POST["name"];
		$pass = $_POST["password"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$contact = $_POST["contact"];
		$country = $_POST["country"];
		
		$sql_query = "INSERT INTO customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_address,customer_contact) 
				VALUES ('$ip','$name','$email','$pass','$country','$address','$contact')";
				
		$add_product = mysqli_query($conn, $sql_query);
		$sel_cart = mysqli_query($conn, "select * from cart where ip_address = '$ip'");
		
		$rows = mysqli_num_rows($sel_cart);
		
		
		if($rows == 0){
			$_SESSION['customer_email'] = $email;
			echo "<script>alert('You are successfully registered as our customer.')</script>";
			echo "<script>window.open('customer/cus_acc.php','_self')</script>";
		}
		else
		{
			$_SESSION['customer_email'] = $email;
			echo "<script>alert('You are successfully registered as our customer.')</script>";
			echo "<script>window.open('checkout.php','_self')</script>";
		}
		
		
	}

?>