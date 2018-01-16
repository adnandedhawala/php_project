<?php
	session_start();
	if(!isset($_SESSION['log_name'])){
		header("location:logout.php");
	}
	else{
		if($_SESSION['log_status']!=0){
			header("location:index.php");
		}
	}

	require_once 'header.php';
?>
<div class="container" style="margin-bottom: 20px">
	<div class="login-form"><!--login form-->
		<h2>Add Product</h2>
		<form action="product_action.php" method="post">
			<select name="pro_caid">
				<option value="">Please Select Category</option>
				<?php  
					$str_pro="select ca_id, ca_name from categories";
					$res_str=mysqli_query($conn,$str_pro) or die($conn);
					if($res_str->num_rows>0):
						while($ans_str=mysqli_fetch_assoc($res_str)):
				?>
				<option value="<?php echo($ans_str['ca_id']) ?>">
					<?php  
						echo($ans_str['ca_name']);
					?>
				</option>
				<?php  
					endwhile;
					endif;
				?>
			</select>
			<br><br>
			<select name="pro_brid" >
				<option value="">Please Select Brand</option>
				<?php  
					$str_br="select * from brands";
					$res_br=mysqli_query($conn,$str_br) or die($conn);
					if($res_br->num_rows>0):
						while($ans_br=mysqli_fetch_assoc($res_br)):
				?>
				<option value="<?php echo($ans_br['br_id']) ?>">
					<?php  
						echo($ans_br['br_name']);
					?>
				</option>
				<?php  
					endwhile;
					endif;
				?>
			</select>
			<br><br>
			<input placeholder="Product Name" type="text" name="pro_name">
			<input placeholder="Product Price" type="text" name="pro_price">
			<input placeholder="Product Discount" type="number" name="pro_discount" value="0" min="0" max="40">
			<input type="file" name="pro_path">
			<textarea placeholder="Product Description" name="pro_description"></textarea>

			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
<?php
	require_once 'footer.php';
?>