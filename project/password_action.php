<?php  
	require_once 'db_connect.php';

	if (empty($_POST['cpass'])){
		echo "please enter password";
	}
	else if (empty($_POST['npass']) || $_POST['cpass']==$_POST['npass']){
		echo " enter new password";
	}
	else if (empty($_POST['cnpass']) || $_POST['cnpass']!=$_POST['npass']){
		echo "confirm new password";
	}
	else{
		// $currpass=sha1($_POST['cpass']);

		// $userid= $_SESSION['log_id'];
		// $pass_str="select log_password from users where log_id='$userid'";
		// fire the query

		$res= $conn->query("select log_password from users where log_id='".$_SESSION['log_id']."'");
		// print_r($res);
		$ans=$res->fetch_array(MYSQLI_ASSOC);

		if($ans['log_password']!= sha1($_POST['cpass'])) echo("current password doesnot match");
		else{
			$new_pass=sha1($_POST['npass']);
			$str="update users set log_password='$new_pass' where log_id='".$_SESSION['log_id']."'";
			$result=mysqli_query($conn,$str) or die(mysqli_error($conn));
			if($result)echo "password updated";
		}

	}
?>