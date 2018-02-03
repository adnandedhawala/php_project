<?php  
	require_once 'db_connect.php';

	if(!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/", $_POST['log_name'])) echo("Enter a Valid Name");
	else if(!preg_match("/^[1-9][0-9]{9}$/", $_POST['log_mobile'])) echo("invalid mobile Number");
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['log_email'])) echo "pls enter valid email";
	else if(!preg_match("/^[a-zA-Z0-9!@#$%^&*+-]{4,13}$/", $_POST['log_pass'])) echo "Improper Password";
	else if(empty($_POST['log_cpass'])||$_POST['log_pass']!=$_POST['log_cpass']) echo "Confirm password";

	else{
		$password=sha1($_POST['log_pass']);
		$res_cnt=mysqli_query($conn,"select * from colouser where user_email='".$_POST['log_email']."'") or die(mysqli_error($conn));
		// print_r($res_cnt);
		if($res_cnt->num_rows>0) echo("user exist");
		else{
			$str="insert into colouser(user_name,user_email,user_mobile,user_password) values ('".$_POST['log_name']."','".$_POST['log_email']."','".$_POST['log_mobile']."','$password')";
			$res_add=mysqli_query($conn,$str);
			if($res_add) echo "user added";
		}
	}

// print_r($_POST);
?>