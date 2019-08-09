<?php
	include_once 'header.php';
?>

	<div class="container">
		<div class="row">
			<form id="cinema_data">
			<ul>
				<li>Select Area</li>
				<li>
					<select name="areaid">
						
						<?php
							$str = "select * from mo_area";
							$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

							while( $ans = mysqli_fetch_assoc($result) )
							{
								// print_r($ans);
								// echo "<br />";
								$name = $ans['area_name'];
								$id = $ans['area_id'];
								echo "<option value='$id'>$name</option>";
							}
							
						?>	
					</select>
				</li>
				<li>Cinema Hall Name</li>
				<li><input type="text" name="cinema_name" placeholder="PVR mulund"></li>	
				<li><input type="button"  class="cinemabtn" value="Add"></li>
				<li id="err_cinema"></li>
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
	$(".cinemabtn").click(function(){
		// alert()
		var record = $("#cinema_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("cinema_action.php" , record , function(response){
			// console.log(response);
			$("#err_cinema").html(response);
			// document.getElementById("errmsg").innerHTML = response;
		})
	});
})
</script>