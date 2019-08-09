<?php
	include_once 'header.php';
?>
	<div class="container">
		<div class="row">
			<h2> Add Seats </h2>
			<form id="screen_seat_data">
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
				<li class="screen_name">
					
				</li>

				<li>Select Seat no</li>
				<li>
					FROM : 
					<select name="from_seat_no">
						<?php
							for($i=1;$i<=200;$i++){
								echo "<option>$i</option>";
							}
						?>
					</select>
					TO : 
					<select name="to_seat_no">
						<?php
							for($i=1;$i<=200;$i++){
								echo "<option>$i</option>";
							}
						?>
					</select>
				</li>	
				<li>Enter Amount:</li>
				<li>
					<input type="number" name="amount" min="50" max="700" placeholder="200" value="100">
				</li>
				<li><input type="button"  class="screen_seat_btn" value="Add"></li>
				<li id="err_seat_time"></li>
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
	
	$(".screen_seat_btn").click(function(){
		// alert()
		var rec = $("#screen_seat_data").serialize();
		// alert(rec);
		$.post("seat_action.php" , rec).success(function(response){
			// alert(response);
			$("#err_seat_time").html(response);
		})
	});

	$(".cin_dropdown").change(function(){
		// alert()
		var cinid = $(this).val();
		// alert(cinid);

		$.post("get_screen_by_cinid.php" , "cinemaid="+cinid).success(function(result){
			$(".screen_name").html(result);
		})
	})
})
</script>