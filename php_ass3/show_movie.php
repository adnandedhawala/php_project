<?php
	include_once 'dbconnect.php';
	include_once 'header.php';
	$id = $_GET['movid'];
	// echo $id;
	$str  = "select cin_id,cin_name,area_name,sc_time_name,sc_screen_id,sc_time_id from mo_movie,mo_cinema,mo_screen_time,mo_screen,mo_movie_screen,mo_area where ms_screen_time_id=sc_time_id and sc_screen_id=screen_id and screen_cin_id=cin_id and ms_screen_movie_id='$id' and mov_id=ms_screen_movie_id and area_id=cin_areaid";

	// echo $str;
	$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
	// $ans = mysqli_num_rows($result);
	// print_r($ans);
	if($result->num_rows>0):
?>

<div class="now-showing-list">
		<div class="col-md-4 movies-by-category movie-booking">
			
			<div class="movie-ticket-book">
					<?php
					// echo $id;
					$str_mov = "select * from mo_movie where mov_id='$id'";
					$result_mov = mysqli_query($conn,$str_mov);
					$movans = mysqli_fetch_assoc($result_mov);
					// print_r($movans);
					?>
					<div class="clearfix"></div>
					<img src="<?php echo $movans['mov_path'];?>" alt="">
					<div class="bahubali-details">
						<h4>Release Date:</h4>
						<p><?php echo $movans['mov_start'];?></p>
						<h4>Name:</h4>
						<p><?php echo $movans['mov_name'];?></p>
						
						<p><?php echo $movans['mov_desc'];?></p>
					</div>
				</div>
			</div>
		<div class="col-md-8 movies-dates">	
			<div class="movie-date-selection">
			<?php
				while($final_ans = mysqli_fetch_assoc($result)):
			?>
				<ul>
					<li class="location">
						<a href="pic-a-movie.html"><i class="fa fa-map-marker"></i><?php echo $final_ans['cin_name'];?>: <?php echo $final_ans['area_name'];?></a>
					</li>
					<li class="time">
						<?php
							$screenid = $final_ans['sc_screen_id'];
							$timeid = $final_ans['sc_time_id'];
						?>
						<a href="show_seats.php?record=<?php echo $screenid;?>&movieid=<?php echo $id;?>&screentimeid=<?php echo $timeid;?>">
						
							<?php echo $final_ans['sc_time_name'];?>

						</a>
					</li>					
				</ul>
			<?php
			endwhile;
			?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

<?php
	endif;
	include_once 'footer.php';
?>
