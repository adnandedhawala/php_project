<?php  
	require_once 'db_connect.php';

	if (empty($_POST['otp_pass'])){
		echo "please enter new password";
	}
	else if (empty($_POST['otp_npass']) || $_POST['otp_pass']!=$_POST['otp_npass']){
		echo " confirm new password";
	}
	else{

		$email=$_SESSION['forgot_email'];
		$pass=sha1($_POST['otp_npass']);

				$str="update users set log_password='$pass',log_otp=0 where log_email='$email'";
			$result=mysqli_query($conn,$str) or die(mysqli_error($conn));
			echo("ok");

	}

