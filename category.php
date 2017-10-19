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
		
		<script>
		// Load this when the DOM is ready
		$(function(){
		  // You used .myCarousel here. 
		  // That's the class selector not the id selector,
		  // which is #myCarousel
		  $('#myCarousel').carousel();
		});
		</script>
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
							getProductCategory();
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
					
				</div>
			</footer>
		</div>
		
		
	</body>
</html>	