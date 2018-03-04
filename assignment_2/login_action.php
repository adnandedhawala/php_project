<?php  
	// print_r($_POST)
	require_once 'db_connect.php';
	if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['log_email'])) echo "pls enter valid email";
	else if(!preg_match("/^[a-zA-Z0-9!@#$%^&*+-]{4,13}$/", $_POST['log_pass'])) echo "Improper Password";
	else{
		$chk_res=mysqli_query($conn,"select * from cineuser where user_email='".$_POST['log_email']."'") or die(mysqli_error($conn));
		if($chk_res->num_rows>0){
			$chk_ans=mysqli_fetch_assoc($chk_res);
			// print_r(sha1($chk_ans['user_password']));
			// exit;
			if(sha1($_POST['log_pass'])==$chk_ans['user_password']){
				$_SESSION['user_name']=$chk_ans['user_name'];
				// $_SESSION['user_mobile']=$chk_ans['user_mobile'];
				$_SESSION['user_id']=$chk_ans['user_id'];
				$_SESSION['user_status']=$chk_ans['user_status'];
				$_SESSION['user_email']=$chk_ans['user_email'];

				header("location:index.php");

			}
			else echo("Incorrect Credentials");
		}
		else echo("user doesnt exist");
	}

?>