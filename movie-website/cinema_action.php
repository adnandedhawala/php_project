<?php
	session_start();
	require_once 'dbconnect.php';

	// print_r($_POST);

	$name = $_POST['cinema_name'];;
	$id = $_POST['areaid'];
	

	$reg = "/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";

	$result = preg_match($reg ,$name);

	if($result!=1){
		echo "Invalid cinema name";
	}
	else{
		$str = "select count(*) as cnt from mo_cinema where cin_name='$name' and cin_areaid='$id' ";
		$res = mysqli_query($conn,$str) or die(mysqli_error($conn));

		$count = mysqli_fetch_assoc($res);
		// print_r($count);
		// exit();

		if($count['cnt']>0){
			echo "Record exist";
		}
		else{
			$str = "insert into mo_cinema (cin_name,cin_areaid) values ('$name','$id') ";
			mysqli_query($conn,$str) or die(mysqli_error($conn));
			echo "Record Added";
		}		
	}
?>