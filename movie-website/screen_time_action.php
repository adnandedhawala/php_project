<?php
	require_once 'dbconnect.php';
	// print_r($_POST);
	if(!isset($_POST['screenid']))
	{
		echo "please select cinema hall";
	}
	else if(empty($_POST['screen_time'])){
		echo "please Enter Time";
	}
	else{
		$time = $_POST['screen_time'];
		$screenid = $_POST['screenid'];

		$str = "insert into mo_screen_time (sc_time_name,sc_screen_id) values ('$time','$screenid') ";

		$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
		if($result==1){
			echo "Time Added in Screen";
		}
	}
?>