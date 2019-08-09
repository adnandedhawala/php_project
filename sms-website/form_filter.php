<?php  
	require_once 'db_connect.php';

	$res=mysqli_query($conn,"select contact_name,contact_mobile from sms_mobile where contact_id='".$_POST['msg']."'") or die(mysqli_error($conn));
	$ans=mysqli_fetch_assoc($res);
	// print_r($ans);

	echo json_encode($ans);


?>