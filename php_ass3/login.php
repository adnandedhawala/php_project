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

	$(".loginbtn").click(function(){
		// alert(1)

		var record = $("#login_data").serialize();
		// console.log(record);
		// pname=amit&pmob=7852140120&pgen=2&pemail=amit%40gmail.com&ppass=a123&cpass=a123

		$.post("login_action.php",record,function(xyz){
			// alert(xyz)
			if(xyz==1){
				window.location.href="welcome.php";
			}
			else{
				$("#errmsg").html(xyz);
				// document.getElementById("errmsg").innerHTML = xyz;
			}
			
		})
	})
});
</script>
<form id="login_data">
	<ul>
		<li>Email Id</li>
		<li><input type="text" name="pemail" placeholder="amit.naik@gmail.com"></li>

		<li>Password</li>
		<li><input type="password" name="ppass" placeholder="a123"></li>

		<li><input type="button"  class="loginbtn" value="Login"></li>
		<li id="errmsg"></li>
	</ul>
</form>
