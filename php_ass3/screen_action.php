<?php
	session_start();
	require_once 'dbconnect.php';

	// print_r($_POST);

	// exit();

	$name = $_POST['screen_name'];;
	$id = $_POST['cinid'];
	

	$reg = "/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/";

	$result = preg_match($reg ,$name);

	if($result!=1){
		echo "Invalid Screen name";
	}
	else{
		$str = "select count(*) as cnt from mo_screen where screen_name='$name' and screen_cin_id='$id' ";
		$res = mysqli_query($conn,$str) or die(mysqli_error($conn));

		$count = mysqli_fetch_assoc($res);
		// print_r($count);
		// exit();

		if($count['cnt']>0){
			echo "Record exist";
		}
		else{
			$str = "insert into mo_screen (screen_name,screen_cin_id) values ('$name','$id') ";
			mysqli_query($conn,$str) or die(mysqli_error($conn));
			echo "Record Added";
		}		
	}
?>