<?php
	include_once 'dbconnect.php';
	include_once 'header.php';
	// print_r($_POST);
	$id = $_POST['movieid'];

	// echo $id;
	// exit();
	$str  = "select cin_id,cin_name,area_name,sc_time_name,sc_screen_id,sc_time_id,screen_name from mo_movie,mo_cinema,mo_screen_time,mo_screen,mo_movie_screen,mo_area where ms_screen_time_id=sc_time_id and sc_screen_id=screen_id and screen_cin_id=cin_id and ms_screen_movie_id='$id' and mov_id=ms_screen_movie_id and area_id=cin_areaid";

	// echo $str;
	$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
	$ans = mysqli_fetch_assoc($result);
	// print_r($ans);
	
	$str_mov = "select * from mo_movie where mov_id='$id'";
	$result_mov = mysqli_query($conn,$str_mov);
	$movans = mysqli_fetch_assoc($result_mov);
	// print_r($movans);
?>
	<div class="container">
		<div class="now-showing-list">
		<div class="col-md-4 movies-by-category movie-booking">
			
			<div class="movie-ticket-book">
					
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
				<h2>Date : <?php echo $_POST['selected_date'];?></h2>

				<h4>Seats : <?php echo $_POST['seatids'];?></h4>
				<p>
					Cinema Name: 
					<?php
						echo $ans['cin_name'];
					?>
					<br />
					Area Name: 
					<?php
						echo $ans['area_name'];
					?>
					<br />
					Screen Name: 
					<?php
						echo $ans['screen_name'];
					?>
					<br />
					Screen Time: 
					<?php
						echo $ans['sc_time_name'];
					?>
					
				</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
<?php
	
	include_once 'footer.php';
?>