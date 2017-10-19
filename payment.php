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
		
		<link href="css/social-sharing.css" rel="stylesheet">
		
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
		<script src="js/jquery-2.1.4.min.js"></script>

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
			<div class = "row">
				<div class='col-md-8'>
					<div class = 'row'>
						<h1>Payment</h1>
						<p>To order us a product you must log in first. To log in you first need to register an account with us. We only accept payment through BKash.
						   Please follow the following procedure to be active with us.</p>

						<h4>Step 1: Registration</h4>
						<p>If you are not already registered please create an account. To create an account please click on the account tab.</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/1.png'>
							</div>
						</div>
						<p>You will be sent to the Sign In page. If u dont have an account click register with us as shown below</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/2.png'>
								<img src='images/3.png'>
							</div>
						</div>
						<p>After this you will be redirected to your account page. You can view your orders here. You can manage your cart too from here.</p>
						<h4>Step 2: Adding to cart</h4>
						<p>To order us a product you must first add the product to your cart. To add a product to your cart you can simply click on the add to cart button displayed next to that product.</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/5.png'>
							</div>
						</div>
						<h4>Step 3: Order</h4>
						<p>To order us a product first visit your cart by clicking on 'Go To Cart' or by visiting your account section.</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/6.png'>
								<img src='images/7.png'>
							</div>
						</div>
						<p>You can update your order quantity and remove any product from the cart page.</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/9.png'>
							</div>
						</div>
						<p>Click the order now button displayed on the cart page and click yes to confirm. After that your order will be placed.</p>
						<div class='col-sm-12 col-lg-12 col-md-12'>
							<div class='thumbnail'>
								<img src='images/8.png'>
							</div>
						</div>
						<?php 
							$sql = mysqli_query($conn,'select * from about');
							$about = mysqli_fetch_array($sql);
							$contact = $about['contact'];
							$bkash = $about['bkash'];
							
							echo "
									<h3>BKASH</h3>
									<p>You can pay us via BKASH. This is our BKASH number : $bkash</p>
									<h3>CONTACT</h3>
									<p>We strongly recommend you contact with us before sending payment through BKash. Here is our contact number : $contact</p>
									<p>You can find more details in about us section.</p>
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
		
		
	</body>
</html>	