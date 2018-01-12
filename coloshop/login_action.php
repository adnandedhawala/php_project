<?php  
require_once 'db_connect.php';

if(empty($_REQUEST['log_email']))echo "Enter a valid email Id";
else if(empty($_REQUEST['log_password']))echo "Enter a valid password";

else{
	$email=$_REQUEST['log_email'];
	$password=sha1($_REQUEST['log_password']);

	$login_str="select * from users where log_email= '$email'";
	$login_res=mysqli_query($conn,$login_str) or die($conn);
	if($login_res->num_rows>0){
		$login_ans=mysqli_fetch_assoc($login_res);
		if($password!=$login_ans['log_password']){
			echo "password entered is wrong";
		}
		else{
			$_SESSION['log_name']=$login_ans['log_name'];
			$_SESSION['log_id']=$login_ans['log_id'];
			$_SESSION['log_email']=$login_ans['log_email'];
			$_SESSION['log_mobile']=$login_ans['log_mobile'];
			$_SESSION['log_status']=$login_ans['log_status'];

			header("location:index.php");
		}

	}
	else{
		echo "email id doesnot exist!";
	}
}

?>