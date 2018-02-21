<?php
	include_once 'header.php';
?>

	<div class="container">
		<div class="row">
			<form id="area_data">
			<ul>
				<li>Area Name</li>
				<li><input type="text" name="area_name" placeholder="mulund East"></li>	
				<li><input type="button"  class="areabtn" value="Add"></li>
				<li id="err_area"></li>
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
	$(".areabtn").click(function(){
		// alert()
		var record = $("#area_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("area_action.php" , record , function(response){
			// console.log(response);
			$("#err_area").html(response);
			// document.getElementById("errmsg").innerHTML = response;
		})
	});
})
</script>