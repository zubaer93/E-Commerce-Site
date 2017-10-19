
<!-- Modal -->
<div>
	<form method = 'post'>
		<h3 style = 'color:#00688B' class="form-signin-heading">Sign in with your email address</h3>
		<div class="form-group">
			<input type="email" name = "email" class="form-control" placeholder="Email address" required autofocus>
		</div>
						
		<div class="form-group">
			<input type="password" name = "password" class="form-control" placeholder="Password" required>
		</div>
		
		<button type='submit' class='btn btn-info' name = 'login'>Sign in</button>
		
		<div class="col-xs-6">
			<a href="customer_register.php" class="btn btn-twitter btn-large btn-caps btnblock">New?Please register here<span class="icon-twitter"></span></a>
			<a href="customer_register.php" class="btn btn-twitter btn-large btn-caps btnblock">Forgot password?<span class="icon-twitter"></span></a>
		</div>
		
		</div>
		
	</form>
</div>


<?php
	if(isset($_POST["login"])){
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql_query = "select * from customers where customer_email = '$email' and customer_pass = '$password'";
				
		$login_acc = mysqli_query($conn, $sql_query);
		$check = mysqli_num_rows($login_acc);
		if($check == 0){
			echo "<script>alert('Incorrect combination. Please try again.')</script>";
			echo "<script>window.open('checkout.php','_self')</script>";
		}
		
		else{
			$_SESSION['customer_email'] = $email;
			echo "<script>alert('Login successful.')</script>";
			echo "<script>window.open('customer/cus_acc.php','_self')</script>";
		}
		

		
	}

?>
