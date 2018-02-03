<?php  
	require_once 'header.php';
?>
<div style="min-height: 200px"></div>
<div class="container" >
		<div class="row" style="min-height: 100px;">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center login-form">
				<h3>Add Product</h3>
				<form id="product_form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<select class="form-control" name="pro_caid">
							<option value="">Please select Category</option>
							<?php  
								$res_ca=mysqli_query($conn,"select * from category") or die(mysqli_error($conn));
								if($res_ca->num_rows>0):
									while($ans_ca=mysqli_fetch_assoc($res_ca)):
							?>
							<option value="<?php echo($ans_ca['ca_id']) ?>"><?php echo($ans_ca['ca_name']) ?></option>
							<?php  
								endwhile;
								endif;
							?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="pro_name" placeholder="Enter Product Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="pro_price" placeholder="Enter Product price">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" name="pro_discount" placeholder="Enter discount" min="0" max="40" >
					</div>
					<div class="form-group">
						<input type="file" name="pro_path" class="form-control" id="pro_file" >
					</div>
					<div class="form-group">
						<textarea class="form-control" name="pro_description" placeholder="Product description"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" id="product_button" class="btn btn-primary" style="background-color: #fe4c50; border: 0px;">Add Product</button>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>
<?php  
	require_once 'footer.php';
?>
s