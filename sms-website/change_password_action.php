<?php  
	require_once 'db_connect.php';
	if(!isset($_SESSION['log_name']))header("location:logout.php");

	if(empty($_POST['cpass']))echo("enter current password");
	else if(empty($_POST['npass'])||$_POST['cpass']==$_POST['npass'])echo("enter new password");
	else if(empty($_POST['cnpass'])||$_POST['cnpass']!=$_POST['npass'])echo("confirm new password");
	else{
		$res=mysqli_query($conn,"select log_password from sms_users where log_name='".$_SESSION['log_name']."'") or die(mysqli_error($conn));
		$ans=mysqli_fetch_assoc($res);
		if($ans['log_password']!=sha1($_POST['cpass']))echo "Current Password Doesn't match";
		else{
			$up_res=mysqli_query($conn,"update sms_users set log_password='".sha1($_POST['npass'])."' where log_id='".$_SESSION['log_id']."'");
			if($up_res) header("location:logout.php");
		}
	}

?>