<?php
	session_start();
	require_once 'dbconnect.php';
	$name = $_POST['area_name'];

	$reg = "/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";

	$result = preg_match($reg ,$name);

	if($result!=1){
		echo "Invalid Area Name";
	}
	else{

		$str = "select count(*) as cnt from mo_area where area_name='$name' ";
		
		$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

		$ans = mysqli_fetch_assoc($result);

		if($ans['cnt'] == 1 ){
			echo "Area Exist";
		}
		else{
			$str = "insert into mo_area (area_name) values ('$name')";
			mysql_query($str) or die(mysql_error());
			echo "Area Added";
		}		
	}	
?>