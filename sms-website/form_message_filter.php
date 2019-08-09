<?php  
	require_once'db_connect.php';

	$res=mysqli_query($conn,"select sms_message from sms_message where sms_id='".$_POST['msg']."'") or die(mysqli_error($conn));
	$ans=mysqli_fetch_assoc($res);

	echo($ans['sms_message']);
?>