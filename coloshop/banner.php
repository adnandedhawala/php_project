	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
			<?php  
				$ca_res=mysqli_query($conn,"select * from category") or die(mysqli_error($conn));
				if($ca_res->num_rows>0):
					while($ca_ans=mysqli_fetch_assoc($ca_res)):
			?>
				<div class="col-md-3">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo($ca_ans['ca_path']) ?>)">
						<div class="banner_category">
							<a href="categories.html"><?php echo($ca_ans['ca_name']) ?></a>
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