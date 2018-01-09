<?php 
	require_once 'db_connect.php';

	if (empty($_POST['log_name'])) $msg = "pls enter valid name";
	if (empty($_POST['log_mobile'])) $msg = "pls enter valid contact number";
	if (empty($_POST['log_email'])) $msg = "pls enter valid email";
	if (empty($_POST['log_password'])) $msg = "pls enter valid password";
	if (empty($_POST['log_cpassword'])||($_POST['log_cpassword']!=$_POST['log_password'])) $msg = "pls enter valid confirm password";
	else{
		$name=$_POST['log_name'];
		$mobile=$_POST['log_mobile'];
		$email=$_POST['log_email'];
		$password=sha1($_POST['log_password']);

		$str="insert into users(log_name,log_mobile,log_password,log_email) values ('$name','$mobile','$email','$password')";

		$result= mysqli_query($conn,$str) or die(mysqli_error($conn));
		if($result){
			$msg="user Added";
		}

	}
	echo $msg;
 ?>

