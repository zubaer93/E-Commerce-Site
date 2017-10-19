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
		  $('#myCarousel').carousel();
		});
		</script>
		<script src="//html5shim.googlecode.com/sbn/trunk/html5.js"></script>
		<script src="js/comment.js"></script>

	</head>

<marquee behavior="scroll"
         direction="left">helpline 01676703020</marquee>
	
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
		
		
		
		<div class="container">
			<div class = "row">
				<?php 
					$sql = mysqli_query($conn,'select * from about');
					$about = mysqli_fetch_array($sql);
					$header = $about['header'];
					$decsription = $about['description'];
					$image = $about['image'];
					
					echo "
							<div class='col-md-8'>
								<div class = 'row'>
									<h1>$header</h1>
									<p>$decsription</p>
								</div>	
							</div>
							<div class='col-md-4'>
								<div class = 'row'>
									<div class='col-sm-12 col-lg-12 col-md-12'>
										<div class='thumbnail'>
											<img src='admin/product_images/$image'>
										</div>
									</div>
								</div>
							</div>
						";
				?>
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