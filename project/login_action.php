<?php  
	require_once 'db_connect.php';

	if (empty($_POST['log_email'])) $msg = "pls enter valid email";
	else if (empty($_POST['log_password'])) $msg = "pls enter valid password";

	else{
		$email=$_POST['log_email'];
		$password = sha1($_POST['log_password']);
		// echo($email);
		// echo($password);

		$str ="select * from users where log_email='$email'";

		$result= mysqli_query($conn,$str) or die(mysqli_error($conn));
		// print_r($result);
		if($result->num_rows>0){
			$rec = mysqli_fetch_assoc($result);

			if($password != $rec['log_password']){
				$msg= "password does'nt match";
			}
			else{
				$msg="ok";
				$_SESSION['log_id']=$rec['log_id'];
				$_SESSION['log_name']=$rec['log_name'];
				$_SESSION['log_email']=$rec['log_email'];
				$_SESSION['log_mobile']=$rec['log_mobile'];

			}
		}
		else{
			$msg="emailid doesnot exist";
		}
	}
	if ($msg="ok"){
		header("location:index.php");
	}
	else{
		echo $msg;
	}
?>