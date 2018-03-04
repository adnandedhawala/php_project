<?php  
	// print_r($_POST)
	require_once 'db_connect.php';

	if (!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/",$_POST['log_name'])) echo $msg = "pls enter valid name";
	else if (!preg_match("/^[1-9][0-9]{9}$/",$_POST['log_mobile'])) echo $msg = "pls enter valid contact number";
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['log_email'])) echo $msg = "pls enter valid email";
	else if (!preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{3,11}$/",$_POST['log_pass'])) echo $msg = "pls enter valid password";
	else if ($_POST['log_cpass']!=$_POST['log_pass']) echo $msg = "pls enter valid confirm password";
	else{
		$name=$_POST['log_name'];
		$mobile=$_POST['log_mobile'];
		$email=$_POST['log_email'];
		$password=sha1($_POST['log_pass']);

		$str_chk="select count(*) as cnt from cineuser where user_email = '$email'";
		// echo($str_chk);

		$res_cnt= mysqli_query($conn,$str_chk) or die(mysqli_error($conn));
		// print_r($res_cnt);
		$final_cnt=mysqli_fetch_assoc($res_cnt);
		// print_r($final_cnt);

		if($final_cnt['cnt']>0){
			echo "user exist";
		}

		else{


			$str="insert into cineuser(user_name,user_mobile,user_email,user_password) values ('$name','$mobile','$email','$password')";

			$result= mysqli_query($conn,$str) or die(mysqli_error($conn));

			if($result){
				echo "ok";
			}			
		}

	}
?>