<?php  
	require_once 'db_connect.php';
	if(empty($_POST['contact_grid']))echo "enter group id";
	else if(empty($_POST['contact_name'])) echo "Enter Contact Name";
	else if(empty($_POST['contact_mobile'])||!is_numeric($_POST['contact_mobile'])) echo "Enter Mobile Number";
	else{
		$res=mysqli_query($conn,"insert into sms_mobile(contact_name,contact_mobile,contact_grid) values('".$_POST['contact_name']."','".$_POST['contact_mobile']."','".$_POST['contact_grid']."')");
		if($res){
			echo "ok";
		}
	}
?>