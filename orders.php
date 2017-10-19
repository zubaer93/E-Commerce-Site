<div class = 'well'>
	<form method = 'post'>
		<h3 style = 'color:#00688B' class="form-signin-heading">Press yes to confirm your order</h3>
		<div class="form-group" >
			<input style = 'color:#00688B' type = "submit" name = "yes" value = "YES" class="form-control">
		</div>
						
		<div class="form-group">
			<input style = 'color:#00688B' type = "submit" name = "no" value = "NO" class="form-control">
		</div>		
	</form>
</div>	


<?php 

				
		
		{
			if(isset($_POST["yes"])){
			$ip = getIp();
			$pro_id = mysqli_query($conn,"select pro_id from cart where ip_address = '$ip'");
			
			
			while($pro = mysqli_fetch_array($pro_id)){
				$id = $pro['pro_id'];
				$quan = mysqli_query($conn,"select quantity from cart where pro_id = '$id'");
				$quant = mysqli_fetch_array($quan);
				$quantity = $quant['quantity'];
				$ca = mysqli_query($conn,"select category from products where id = '$id'");
				$cat = mysqli_fetch_array($ca);
				$cat_id = $cat['category'];
				$con = mysqli_query($conn,"select customer_contact from customers where customer_ip = '$ip'");
				$cont = mysqli_fetch_array($con);
				$contact= $cont['customer_contact'];
				mysqli_query($conn,"insert into orders (product_id,category_id,quantity,contact) values ('$id','$cat_id','$quantity','$contact')");
				$quan = mysqli_query($conn,"delete from cart where ip_address = '$ip'");
				
			}
			
			if($pro_id){
				echo "<script>alert('product has been ordered successfully. We will contact you soon.')</script>";
				echo "<script>window.open('index.php','_self')</script>";
				
			}
			else{
				echo "<script>alert('Data could not be updated. Please try again.')</script>";
			}
			}
			elseif(isset($_POST["no"])){
				echo "<script>window.open('cart.php','_self')</script>";
			}
			
			
			
	
		}	

?>