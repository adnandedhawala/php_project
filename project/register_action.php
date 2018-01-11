<?php 
	require_once 'db_connect.php';

	if (empty($_POST['log_name'])) $msg = "pls enter valid name";
	else if (empty($_POST['log_mobile'])) $msg = "pls enter valid contact number";
	else if (empty($_POST['log_email'])) $msg = "pls enter valid email";
	else if (empty($_POST['log_password'])) $msg = "pls enter valid password";
	else if (empty($_POST['log_cpassword'])||($_POST['log_cpassword']!=$_POST['log_password'])) $msg = "pls enter valid confirm password";
	else{
		$name=$_POST['log_name'];
		$mobile=$_POST['log_mobile'];
		$email=$_POST['log_email'];
		$password=sha1($_POST['log_password']);

		$str_chk="select count(*) as cnt from users where log_email = '$email'";
		// echo($str_chk);

		$res_cnt= mysqli_query($conn,$str_chk) or die(mysqli_error($conn));
		// print_r($res_cnt);
		$final_cnt=mysqli_fetch_assoc($res_cnt);
		// print_r($final_cnt);

		if($final_cnt['cnt']>0){
			$msg = "user exist";
		}

		else{


			$str="insert into users(log_name,log_mobile,log_email,log_password) values ('$name','$mobile','$email','$password')";

			$result= mysqli_query($conn,$str) or die(mysqli_error($conn));
			if($result){
				$msg="user Added";
			}			
		}


	}
	echo $msg;
 ?>

