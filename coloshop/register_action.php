<?php  
	require_once 'db_connect.php';

	if(empty($_REQUEST['log_name'])) echo "Enter valid Name";
	else if(empty($_REQUEST['log_mobile'])) echo "Enter valid Mobile no.";
	else if(empty($_REQUEST['log_email'])) echo "Enter valid Email ID";
	else if(empty($_REQUEST['log_password'])) echo "password should not be empty";
	else if(empty($_REQUEST['log_cpassword'])) echo "pls confirm password";

	else{
		$name=$_REQUEST['log_name'];
		$mobile=$_REQUEST['log_mobile'];
		$email=$_REQUEST['log_email'];
		$password=sha1($_REQUEST['log_password']);

		$str="select count(*) as cnt from users where log_email='$email'";
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		$ans=mysqli_fetch_assoc($res);
		if($ans['cnt']>0)echo "user exist";
		else{
			$log_str="insert into users(log_name,log_mobile,log_email,log_password) values('$name','$mobile','$email','$password')";
			$log_res=mysqli_query($conn,$log_str) or die(mysqli_error($conn));
			if($log_res) echo "user added";
		}

	}

?>