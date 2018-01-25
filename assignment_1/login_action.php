<?php  
	require_once 'db_connect.php';

	if(empty($_POST['log_email']))echo "Please Enter email";
	else if(empty($_POST['log_password']))echo "PASSWORD INCORRECT ";
	else{
		$res=mysqli_query($conn,"select * from sms_users where log_email='".$_POST['log_email']."' ");
		// print_r($res);
		if($res->num_rows>0){
			$ans=mysqli_fetch_assoc($res);
			if($ans['log_password']==sha1($_POST['log_password'])){
				$_SESSION['log_id']=$ans['log_id'];
				$_SESSION['log_name']=$ans['log_name'];
				$_SESSION['log_mobile']=$ans['log_mobile'];
				$_SESSION['log_email']=$ans['log_email'];

				header("location:index.php");
			}
			else{
				echo "PASSWORD INCORRECT";
			}
		}
		else{
			echo "email doesnot exist";
		}
	}

?>