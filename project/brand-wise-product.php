<?php
	require_once 'header.php';
?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php
					require_once 'sidebar.php';
					?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Brandwise Items</h2>

<?php
	$branditem=$_GET['brid'];
	// echo($branditem);
	$str_brand="select br_name from brands where br_id= '$branditem' ";
	$result=mysqli_query($conn,$str_brand) or die(mysqli_error($conn));
	$result_brand= mysqli_fetch_assoc($result);
	// var_dump($result_brand);


	
	echo "<h2>".$result_brand['br_name']."</h2>";


	$str = "select pro_id,pro_name,pro_price,pro_discount,pro_description,pro_path,br_name,ca_name  from brands,categories,products where br_id=pro_brid and ca_id=pro_caid and pro_brid= $branditem order by pro_id desc";

	$res = mysqli_query($conn,$str) or die(mysqli_error($conn));
	// print_r($res);
	if($res->num_rows > 0):
	while($ans = $res->fetch_array(MYSQLI_ASSOC)):
		// echo "<pre>";
		// print_r($ans);
		// echo "</pre>";
?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo $ans['pro_path'];?>" alt="" />
						<h2><?php echo round($ans['pro_price']);?></h2><!-- round function converts floating point t nearest integer-->
						<p><?php echo $ans['pro_name'];?></p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2><?php echo round($ans['pro_price']);?></h2>
							<p><?php echo $ans['pro_name'];?></p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i><?php echo $ans['ca_name'];?></a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i><?php echo $ans['br_name'];?></a></li>
				</ul>
			</div>
		</div>
	</div>
<?php
	endwhile;
	endif;
?>						
						
					</div><!--features_items-->
					
					
				</div>
			</div>
		</div>
	</section>
<?php
	require_once 'footer.php';
?>	
