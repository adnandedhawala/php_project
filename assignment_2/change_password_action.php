<?php  
	require_once 'db_connect.php';
	// print_r($_POST);
	if(!preg_match("/^[a-zA-Z0-9!@#$%^&*+-]{4,13}$/", $_POST['log_cpass'])) echo "Improper Password";
	else if(!preg_match("/^[a-zA-Z0-9!@#$%^&*+-]{4,13}$/", $_POST['log_npass'])||$_POST['log_cpass']==$_POST['log_npass']) echo "Enter Valid new Password";
	else if(!preg_match("/^[a-zA-Z0-9!@#$%^&*+-]{4,13}$/", $_POST['log_cnpass'])||$_POST['log_npass']!=$_POST['log_cnpass']) echo "Confirm new Password";
	else{
		// echo("ok");
		$pass_res=mysqli_query($conn,"select user_password from cineuser where user_id='".$_SESSION['user_id']."'") or die(mysqli_error($conn));
		$pass_ans=mysqli_fetch_assoc($pass_res);
		if($pass_ans['user_password']==sha1($_POST['log_cpass'])){
			$new_pass=mysqli_query($conn,"update cineuser set user_password='".sha1($_POST['log_npass'])."' where user_id='".$_SESSION['user_id']."'")or die(mysqli_error($conn));
			if($new_pass) echo("ok");
		}
		else echo "Current password doesnot match";
	}


	
?>