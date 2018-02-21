<?php
	session_start();
	//load database connection
	include("dbconnect.php");

	//get all data from register.php using method
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	//emailid validation
	$exp_email = "/^([a-z0-9][a-z0-9_\.]{1,}[a-z0-9])@([a-z0-9][a-z0-9\-]{1,}[a-z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/";
	$txt_email = $_POST['pemail'];

	$res_email = preg_match($exp_email,$txt_email);
	// echo $res_email;
	if($res_email!=1){
		echo "Invalid Email Id";
	}
	else{
		$exp_pass = "/^[a-zA-Z0-9]{4,12}$/";
		$txt_pass = $_POST['ppass'];
		$result_pass = preg_match($exp_pass,$txt_pass);
		// echo $result_pass;
		if($result_pass!=1){
			echo "invalid password";
		}
		else{
			//check emailid and password with database
			// echo "ok";
			$email = $_POST['pemail'];
			// echo $email;

			$pass = sha1($_POST['ppass']);
			// echo $pass;

			$str = "select count(*) as cnt from userdetails where pemailid='$email' and ppass='$pass' ";
			// echo $str;

			$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

			$ans = mysqli_fetch_assoc($result);
			// print_r($ans);

			if($ans['cnt']>0){
				// echo "valid user";
				//redirect to indexpage or dashborad page

				$_SESSION['useremail'] = $_POST['pemail'];
				echo 1;
			}
			else{
				echo "invalid credential";
			}
		}
	}

?>