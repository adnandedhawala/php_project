<?php 
	require_once 'db_connect.php';

	if (empty($_POST['forgot_otp'])) {echo $msg = "pls enter valid otp";}
	
	else{
		
		$email=$_SESSION['forgot_email'];
		// echo($email);
		// exit;
				$res= $conn->query("select log_otp from users where log_email='$email'");
		 // print_r($res);
		 
		 	$final_cnt=mysqli_fetch_assoc($res);
		// print_r($final_cnt);
		 	if($_POST['forgot_otp']==$final_cnt['log_otp']){
		 		echo("ok");
		 	}
		 	else{
		 		echo("inavlid otp");
		 	}
	}