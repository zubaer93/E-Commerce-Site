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

	</head>

	<body>
	
	<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		
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
						<li><a href = "https://www.google.com.bd/maps/@22.35604,91.8375703,3a,44.7y,312.72h,93.89t/data=!3m6!1e1!3m4!1sIu4Ec9bVrMKN0KQe2k6dtw!2e0!7i13312!8i6656?hl=en">MAPS </a> </li>
						<li><a href = "contact.php">CONTACT US </a> </li>
						<li><a href = "payment.php">PAYMENT</a> </li>
						<li><a href = "customer/cus_acc.php">MY ACCOUNT </a> </li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				
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
		
		<div class = 'container'>
			<div class="well well-sm" align = 'center' >
								<?php cart();?>
								<?php
									if(isset($_SESSION['customer_email'])){
										echo "<p style = 'color:#00688B'>Welcome ".$_SESSION['customer_email'];
									}
									else{
										echo "<p style = 'color:#00688B'>Welcome guest";
									}
								?>	
								Shopping cart   Total items : <?php total_items();?>  Total price:   <?php total_price(); ?> <a style = 'color:#ffffff' href = "cart.php"><button class='btn btn-primary' >Go to cart</button></a>
								<?php
									if(!isset($_SESSION['customer_email'])){
										echo "<a  style = 'color:#ffffff' href = 'checkout.php'><button class='btn btn-primary'>  Login</button></a>";
									}
									else{
										echo "<a  style = 'color:#ffffff' href = 'logout.php'><button class='btn btn-primary'>  Logout</button></a>";
									}
								?>
								</p>  
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
						<?php 
							$sql = mysqli_query($conn,'select * from admin_contacts');
							$about = mysqli_fetch_array($sql);
							$address1 = $about["address1"];
							$address2 = $about["address2"];
							$contact1 = $about["contact1"];
							$contact2 = $about["contact2"];
							$email1 = $about["email1"];
							$email2 = $about["email2"];
					
							echo "
									<div class='col-md-8'>
										<div class = 'row'>
											<h1 style = 'color:#00688B'>For Bangladeshi customers:</h1>
											<h4 style = 'color:#00688B'>Address</h4>
											<p style = 'color:#00688B'>$address1</p>
											<h4 style = 'color:#00688B'>Contact</h4>
											<p style = 'color:#00688B'>$contact1</p>
											<h4 style = 'color:#00688B'>Email</h4>
											<p style = 'color:#00688B'>$email1</p>
											<h1 style = 'color:#00688B'>For Malaysian customers:</h1>
											<h4 style = 'color:#00688B'>Address</h4>
											<p style = 'color:#00688B'>$address2</p>
											<h4 style = 'color:#00688B'>Contact</h4>
											<p style = 'color:#00688B'>$contact2</p>
											<h4 style = 'color:#00688B'>Email</h4>
											<p style = 'color:#00688B'>$email2</p>
											
										</div>
									</div>
								";
						?>
					</div>
				</div>	
			</div>	
		</div>		

		
		
		<div class="container">
			<hr>
			<!-- Footer -->
			<footer>
				<div class="row" align = 'center'>
					<div class="col-lg-12">
						<!-- Facebook -->
						<div class="fb-share-button" data-href="https://www.coursera.org/" data-layout="button_count"></div>
						<p style = 'color:#00688B' >Copyright &copy;2015 by MRC GLOBAL</p>
						<p style = 'color:#00688B' >Developed by &copy;<b>DEW-T CORP & &copy;Mango Integrated</b></p>
					</div>
				</div>
			</footer>
		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>	

