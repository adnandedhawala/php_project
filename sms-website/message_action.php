<?php  
	require_once 'db_connect.php';
	if(empty($_POST['mes_lib_id']))echo "select library";
	else if(empty($_POST['sms_mess'])||$_POST['sms_mess']>300) echo("pls enter message");

	else{
		$res=mysqli_query($conn,"insert into sms_message(sms_message,sms_libid) values('".$_POST['sms_mess']."','".$_POST['mes_lib_id']."')") or die(mysqli_error($conn));
		if($res)echo "message added";		
	}
?>
