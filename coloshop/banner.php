	<!-- Slider -->

	<!-- <div class="main_slider" style="background-image:url(images/slider_1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2017</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Slider -->
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
						<h3>Categories</h3>
					</div>
			</div>
		</div>
		
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">

				<?php  
			$str="select * from category";
			$fire=mysqli_query($conn,$str) or die(mysqli_error($conn));
			// print_r($fire);
			if($fire->num_rows>0):
				while ($ans=mysqli_fetch_assoc($fire)):
				?>
				<div class="col-md-3">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo($ans['ca_imgpath']) ?>);
					margin: 10px 0;">
						<div class="banner_category">
							<a href="category_wise_action.php?catid=<?php echo $ans['ca_id'] ?>"><?php echo($ans['ca_name']) ?></a>
						</div>
					</div>
				</div>

<?php  
	endwhile;
	endif;
?>
				

			</div>
		</div>
	</div>

	<!-- Banner -->