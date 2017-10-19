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
		<meta property="fb:admins" content="tamim.asif.9"/>
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
						
						<li><a href = "customer/cus_acc.php">MY ACCOUNT</a> </li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				
			</div>
			<!-- /.container -->
		</nav>
		
		<div class="container">
			<div class ="row">
					<div class = "col-md-12" align = 'center'>
						<img class="img-responsive" id = "logo" src = "images/ad.jpg" height ="200" width = "1140"/>
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
						if(isset($_GET["pro_id"])){
							$product_id = $_GET['pro_id'];
							$random_sql = "select * from products where id = '$product_id'";
							$random_query = mysqli_query($conn, $random_sql);
								
							while($pro = mysqli_fetch_array($random_query)){
									$id = $pro["id"];
									$title = $pro["title"];
									$category = $pro["category"];
									$brand = $pro["brand"];
									$price = $pro["price"];
									$image = $pro["image"];
									$image1 = $pro["image1"];
									$image2 = $pro["image2"];
									$image3 = $pro["image3"];
									$description = $pro["description"];
									$discount = $pro["discount"];
									$stock = $pro["stock"];
									$url = 'http://mrcglobalonline.com/details.php?pro_id=';
									
									echo "

											<div class='col-md-12'>
												<div class='thumbnail'>
													<div class='row'>
														<div class='col-sm-6'>
															<img class='img-responsive' src='admin/product_images/$image' alt='' />
															<div class='thumbnails row'>
																<div class='col-xs-3'>
																	<a href='admin/product_images/$image'><img src='admin/product_images/$image' alt='' class='img-thumbnail img-responsive' /></a>
																</div>
																<div class='col-xs-3'>
																	<a href='admin/product_images/$image1'><img src='admin/product_images/$image1' alt='image1' class='img-thumbnail img-responsive' /></a>
																</div>
																<div class='col-xs-3'>
																	<a href='admin/product_images/$image2'><img src='admin/product_images/$image2' alt='image2' class='img-thumbnail img-responsive' /></a>
																</div>
																<div class='col-xs-3'>
																	<a href='admin/product_images/$image3'><img src='admin/product_images/$image3' alt='image3' class='img-thumbnail img-responsive' /></a>
																</div>
															</div>
														</div>
														<div class='col-sm-6'>
															<h4 style = 'color:#00688B'>$title</a></h4>
															<h5 style = 'color:#00688B'>PRICE:<b> ৳  $price </b></h5>
															<h5 style = 'color:#00688B'>DISCOUNT PRICE:<b> ৳  $discount </b></h5>
															
															<h5 style = 'color:#00688B'>Remaining Stock:<b>  $stock </b></h5>
															<h5 style = 'color:#00688B'>ORIGIN:<b> $country </b></h5>
															<h5 style = 'color:#00688B'>BRAND:<b> $brand</b></h5>
                                                                                                                        
															<p>$description</p>
															<p><a href = 'index.php'><b>HOME</b></a></p>
															<p><a href = 'index.php?add_cart=$id'><button>Add to cart</button></a></p>
															<div class='fb-share-button' data-href= $url.$product_id data-layout='button_count'></div>



														</div>
													</div>	
												</div>
											</div>
											<div class='col-md-12'>
												<div class='fb-comments' data-href= $url.$product_id  data-numposts='5'></div>
											</div>
										";
							}
						}

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
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>	

<?php
	if(isset($_POST["review"])){
			$id = $_GET['pro_id'];
			$name = $_POST["name"];
			$country = $_POST["country"];
			$comment = $_POST["comment"];
			
			$sql_query = "INSERT INTO comments (product_id,name,country,comment) VALUES ('$id','$name','$country','$comment')";

			$update_comment = mysqli_query($conn, $sql_query);
			
			if($update_comment){
				echo "<script>alert('Your review is added successfully.')</script>";
				echo "<script>window.open('details.php?pro_id=$id','_self')</script>";
			}	
		}

?>