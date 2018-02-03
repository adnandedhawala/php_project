

	<!-- Product 6 -->
	<?php  
		require_once 'db_connect.php';
		$pro_res=mysqli_query($conn,"select * from products")or die(mysqli_error($conn));
		if($pro_res->num_rows>0):
			while($pro_ans=mysqli_fetch_assoc($pro_res)):
	?>
	<div class="product-item ">
		<div class="product discount product_filter">
			<div class="product_image">
				<img src="<?php echo($pro_ans['pro_path']) ?>" alt="">
			</div>
			<!-- <div class="favorite favorite_left"></div> -->
			<?php  
				if($pro_ans['pro_new']==1):
			?>
			<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
			<?php  
				endif;
			?>
			<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo("-".$pro_ans['pro_discount']."%") ?></span></div>
			<div class="product_info">
				<h6 class="product_name"><a href="#single.html"><?php echo($pro_ans['pro_name']) ?></a></h6>
				<div class="product_price"><?php 
					$dis=($pro_ans['pro_discount']/100)*$pro_ans['pro_price'];
					echo("$ ".($pro_ans['pro_price']-$dis));
				 ?><span><?php echo("$ ".$pro_ans['pro_price']) ?></span></div>
			</div>
		</div>
		<div class="red_button add_to_cart_button"><a class="add_cart" for="<?php echo($pro_ans['pro_id']) ?>" href="#">add to cart</a></div>
	</div>
	<?php  
		endwhile;
		endif;
	?>