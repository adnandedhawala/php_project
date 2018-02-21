<?php
	include_once 'header.php';
?>

	<div class="container">
		<div class="row">
			<form id="password_data">
			<ul>
				<li>current Password</li>
				<li><input type="password" name="cpass" placeholder="a123"></li>

				<li>new  Password</li>
				<li><input type="password" name="npass" placeholder="a123"></li>

				<li>confirm new Password</li>
				<li><input type="password" name="cnpass" placeholder="same as new password"></li>

				<li><input type="button"  class="updatebtn" value="Update"></li>
				<li id="errmsg"></li>
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
	$(".updatebtn").click(function(){
		// alert()
		var record = $("#password_data").serialize();
		// console.log(record);
		// cpass=aaa&npass=aaa&cnpass=aaa
		$.post("password_action.php" , record , function(response){
			// console.log(response);
			$("#errmsg").html(response);
			// document.getElementById("errmsg").innerHTML = response;
		})
	});
})
</script>