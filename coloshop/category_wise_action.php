<?php  
	require_once 'header.php';
?>
	<div style="min-height: 150px;"></div>
<?php  
	require_once 'banner.php';
?>

	<!-- New Arrivals -->
<?php  
	$categoryid=$_REQUEST['catid'];
	echo($categoryid);

	$cat_str="select * from category where ca_id='$categoryid'";
	$ans_str=mysqli_query($conn,$cat_str) or die($conn);
	// print_r($ans_str);
	if($ans_str->num_rows>0){
		$res_str=mysqli_fetch_assoc($ans_str);
	}
?>
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2><?php echo $res_str['ca_name'] ?></h2>
					</div>
				</div>
			</div>
			<!-- <div class="row align-items-center">
				
			</div> -->
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 3 -->
<?php  
	$pro_str="select pro_id,pro_name,pro_price,pro_discount,pro_description,pro_caid,pro_path,ca_name,ca_id from category,products where pro_caid=ca_id and ca_id='$categoryid' order by pro_id desc";
	$res_str=mysqli_query($conn,$pro_str) or die(mysqli_error($conn));
	// print_r($res_str);
	if($res_str->num_rows>0):
		while($ans_str=mysqli_fetch_assoc($res_str)):
?>
						<div class="product-item ">
							<div class="product product_filter">
								<div class="product_image">
									<img src="<?php echo $ans_str['pro_path'] ?>" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo($ans_str['pro_name']) ?></a></h6>
									<div class="product_price"><?php echo "₹ ".round($ans_str['pro_price']) ?></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
<?php  
	endwhile;
	endif;
?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<!-- Best Sellers -->

	<!-- Benefit -->

	<!-- Blogs -->

	<!-- Newsletter -->

	<!-- Footer -->

<?php  
	require_once 'footer.php';
?>