<?php
	session_start();
	// print_r($_SESSION);
	require_once 'dbconnect.php';

	// print_r($_POST);

	$exp_pass = "/^[a-zA-Z0-9]{4,12}$/";
	$curpass = $_POST['cpass'];

	$res_curpass = preg_match($exp_pass,$curpass);
	// echo $res_curpass;
	if($res_curpass!=1){
		echo "Invalid Current Password";
	}
	else{
		$newpass = $_POST['npass'];
		$res_npass = preg_match($exp_pass,$newpass);
		// echo $res_npass ;
		if($res_npass!=1){
			echo "Invalid New Password";
		}
		else{
			if($_POST['npass']!=$_POST['cnpass']){
				echo "Confirm pass mismtach";
			}
			else if($_POST['cpass']==$_POST['npass']){
				echo "new pass should be diff from current pass";
			}
			else{
				$text_curpass = sha1($_POST['cpass']);
				// echo $text_curpass;

				//get emailid from session

				$email = $_SESSION['useremail'];
				// echo $email;

				//select password from table using emailid from session

				$str = "select ppass from userdetails where pemailid='$email'";

				// echo $str;

				//query execution
				$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

				// get actual data from table

				$result_from_db = mysqli_fetch_assoc($result);
				// print_r($result_from_db);

				$pass_from_db = $result_from_db['ppass'];
				// echo $pass_from_db;

				if($pass_from_db!=$text_curpass){
					echo "current password does not match with db";
				}
				else{
					// echo "ok";
					$newpass = sha1($_POST['npass']);
					$str = "update userdetails set ppass='$newpass' where pemailid='$email' ";

					// echo $str;
					$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
					echo $result;
				}
			}
		}
	}
?>