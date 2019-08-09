<?php
	include_once 'header.php';
?>

	<div class="container">
		<div class="row">
			<form id="screen_data">
			<ul>
				<li>Select Area</li>
				<li>
					<select name="cinid">
						
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
				<li>Screen Name</li>
				<li><input type="text" name="screen_name" placeholder="Screen 1"></li>	
				<li><input type="button"  class="screenbtn" value="Add"></li>
				<li id="err_screen"></li>
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
	$(".screenbtn").click(function(){
		// alert()
		var record = $("#screen_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("screen_action.php" , record , function(response){
			// console.log(response);
			$("#err_screen").html(response);
			// document.getElementById("errmsg").innerHTML = response;
		})
	});
})
</script>