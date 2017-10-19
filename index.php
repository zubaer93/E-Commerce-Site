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
		
		<script>
		// Load this when the DOM is ready
		$(function(){
		  $('#myCarousel').carousel();
		});
		</script>
		<script src="//html5shim.googlecode.com/sbn/trunk/html5.js"></script>
		<script src="js/comment.js"></script>

	</head>

	<body>
		<div id="fb-root"></div>
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
						<li><a href = "customer/cus_acc.php">MY ACCOUNT</a> </li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				
			</div>
			<!-- /.container -->
		</nav>

			
		<div class="container">
			<div class = "row" >

				<div class="col-xs-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img class="slide-image" src="images/ad1.jpg" alt="Chania">
							</div>

							<div class="item">
							  <img class="slide-image" src="images/ad2.jpg" alt="Flower">
							</div>

							<div class="item">
							  <img class="slide-image" src="images/ad3.jpg" alt="Flower">
							</div>
							
							<div class="item">
							  <img class="slide-image" src="images/ad4.jpg" alt="Flower">
							</div>
							
							<div class="item">
							  <img class="slide-image" src="images/ad5.jpg" alt="Flower">
							</div>
							<div class="item">
							  <img class="slide-image" src="images/ad6.jpg" alt="Flower">
							</div>
							<div class="item">
							  <img class="slide-image" src="images/ad7.jpg" alt="Chania">
							</div>
							<div class="item">
							  <img class="slide-image" src="images/ad8.jpg" alt="Chania">
							</div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>

			</div>	
		</div>
		
		<div class = 'container'>
			<div class="well well-sm" align = 'center' >
								<?php cart();?>
								<?php
									if(isset($_SESSION['customer_email'])){
										echo "Welcome ".$_SESSION['customer_email'];
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
					<p class="lead" align = 'center' style = 'color:#00688B'>Categories</p>
					<ul class="list-group">
					<?php
						getCategory();
					?>
					</ul>
				</div>
				<div class="col-md-9">
					
					<div class = "row">
						<?php
							getProduct();
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
						<div class="fb-share-button" data-href="http://www.mrcglobalonline.com/" data-layout="button_count"></div>
					
						</div>	
					</div>
				</div>
			</footer>
		</div>
		
		
	</body>
</html>	