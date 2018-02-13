<?php 
	require_once 'db_connect.php';

	if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['forgot_email'])) {echo $msg = "pls enter valid email";}
	
	else{
		
		$_SESSION['forgot_email']=$_POST['forgot_email'];
		// echo($email);
				$res= $conn->query("select log_mobile from users where log_email='".$_POST['forgot_email']."'");
		 // print_r($res);
		 if($res->num_rows>0){
		 	$final_cnt=mysqli_fetch_assoc($res);
		// print_r($final_cnt);
		$rnd= rand(1000,9999);
		// echo($rnd);

		$str="update users set log_otp='$rnd' where log_email='".$_POST['forgot_email']."'";
			$result=mysqli_query($conn,$str) or die(mysqli_error($conn));
			echo("ok");
		 }
		 else{
		 	echo("email doesnot exist");
		 }
	}