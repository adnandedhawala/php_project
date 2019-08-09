<?php
	session_start();
	if(isset($_SESSION['useremail'])){
		header("location:welcome.php");
	}
?>

<script src="js/jquery.js"></script>
<script>
$(document).ready(function(){

	// alert("test");

	$(".regbtn").click(function(){
		// alert(1)

		var record = $("#register_data").serialize();
		// console.log(record);
		// pname=amit&pmob=7852140120&pgen=2&pemail=amit%40gmail.com&ppass=a123&cpass=a123

		$.post("register_action.php",record,function(xyz){
			// alert(xyz)
			$("#errmsg").html(xyz);
			// document.getElementById("errmsg").innerHTML = xyz;
		})
	})
});
</script>
<form id="register_data" >

	<ul>
		<li>name</li>
		<li><input type="text" name="pname" placeholder="Amit Naik"></li>

		<li>Mobile</li>
		<li><input type="text" name="pmob" placeholder="9860098500"></li>

		<li>Gender</li>
		<li><input type="radio" name="pgen" value="1"> Male <input type="radio" name="pgen" value="2" checked="checked"> FeMale </li>

		<li>Email Id</li>
		<li><input type="text" name="pemail" placeholder="amit.naik@gmail.com"></li>

		<li>Password</li>
		<li><input type="password" name="ppass" placeholder="a123"></li>

		<li>Confirm Password</li>
		<li><input type="password" name="cpass" placeholder="Same as Password"></li>

		<li><input type="button" class="regbtn" value="Enter"></li>

		<li id="errmsg"></li>
	</ul>

</form>
