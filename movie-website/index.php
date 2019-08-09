<?php
	include_once("header.php");
?>
	
				
		<div class="footer-top-grid">
		<div class="col-md-12">
			
				<div class="clearfix"></div>
				<div class="featured" style="width:100%">
					<h4>Featured</h4>
					<ul>
						<?php
						$str = "select * from mo_movie where mov_start <= (select curdate() ) order by mov_name asc ";
						$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
						while($ans = mysqli_fetch_assoc($result)):
						?>
						<li>
							<div class="f-movie">
								<div class="f-movie-img">
									<a href="movies.html"><img src="<?php echo $ans['mov_path']?>" alt=""></a>
								</div>
									<div class="f-movie-name">
										<a href="movies.html"><?php echo $ans['mov_name']?></a>
										<p>Start : <?php echo $ans['mov_start']?></p>
										<p>
											<?php echo $ans['mov_desc']?>
										</p>
									</div>								 
								<div class="f-buy-tickets">
									<a href="show_movie.php?movid=<?php echo $ans['mov_id']?>">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<?php
						endwhile;
						?>

						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
			
			<div class="clearfix"></div>			
			</div>
		
		</div>
	<?php
	include_once 'footer.php';
	?>