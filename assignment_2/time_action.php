<?php  
	require_once 'db_connect.php';
	
	if(empty($_POST['cinema_id']))echo("Select Cinema");
	else if(empty($_POST['screen_id']))echo("Select Screen");
	else if(!preg_match("/^[0-9][0-9]:[0-9][0-9][ap]m$/", $_POST['time_name']))echo("invalid time");
	else{
		// print_r($_POST);
		$result=mysqli_query($conn,"insert into cine_screen_time(sc_time_screen_id,sc_time_name) values('".$_POST['screen_id']."','".$_POST['time_name']."')");
		if($result) echo("time added");

	}

?>