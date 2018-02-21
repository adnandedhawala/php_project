<?php
	include_once 'header.php';
?>
	<div class="container">
		<div class="row">
			<form id="screen_time_data">
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
				<li>Screen Time</li>
				<li><input type="text" name="screen_time" placeholder="Screen 1"></li>	
				<li><input type="button"  class="screen_time_btn" value="Add"></li>
				<li id="err_screen_time"></li>
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
	$(".screen_time_btn").click(function(){
		// alert()
		var record = $("#screen_time_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("screen_time_action.php" , record , function(response){
			// console.log(response);
			$("#err_screen_time").html(response);
			// document.getElementById("errmsg").innerHTML = response;
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