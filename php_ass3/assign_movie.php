<?php
	include_once 'header.php';
?>
	<div class="container">
		<div class="row">
			<h1>Assign Movie</h1>
			<form id="movie_assign_data">
			<ul>
				<li>Select Area</li>
				<li>
					<select name="cinid" class="cin_dropdown">					
						<?php
							$str = "select * from mo_cinema";
							$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

							while( $ans = mysqli_fetch_assoc($result) )
							{
								// print_r($ans);
								// echo "<br />";
								$name = $ans['cin_name'];
								$id = $ans['cin_id'];
								echo "<option value='$id'>$name</option>";
							}							
						?>	
					</select>
				</li>
				<li> Select Screen</li>
				<li class="screen_name"></li>

				<li> Select Screen Time</li>
				<li class="screen_time"></li>

				<li>Select Movie</li>
				<li>
					<select name="movieid">						
						<?php
							$str = "select mov_id,mov_name from mo_movie";
							$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
							while( $ans = mysqli_fetch_assoc($result) )
							{
								// print_r($ans);
								// echo "<br />";
								$name = $ans['mov_name'];
								$id = $ans['mov_id'];
								echo "<option value='$id'>$name</option>";
							}							
						?>	
					</select>
				</li>
				<li>Add End Date</li>
				<li><input type="text" name="end_date" placeholder="2016-08-09"></li>	
				<li><input type="button"  class="movie_assign_btn" value="Add"></li>
				<li id="err_movie_assign"></li>
			</ul>
		</form>
		</div>
	</div>

<?php
	include_once 'footer.php';
?>

<script>
$(document).ready(function(){
	// alert()
	$(".movie_assign_btn").click(function(){
		// alert()
		var record = $("#movie_assign_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("movie_assign_action.php" , record , function(response){
			// console.log(response);
			$("#err_movie_assign").html(response);
			// document.getElementById("errmsg").innerHTML = response;
		});
	});

	$(".cin_dropdown").change(function(){
		// alert()
		var cinid = $(this).val();
		// alert(cinid);

		$.post("get_screen_by_cinid.php" , "cinemaid="+cinid).success(function(result){
			$(".screen_name").html(result);
		})
	})

	// this is not acutal element
	// $(".screenid").change(function(){
	// 	alert()
	// })

	//apply for virtual element
	$(document).on("change" , ".screenid" , function(){
		// alert(1)
		var screenid = $(this).val();
		// alert(screenid);
		$.post("get_screen_time_screenid.php" , "id="+screenid).success(function(result){
			$(".screen_time").html(result);
		})
	})
})
</script>