<?php
	include_once 'dbconnect.php';
	print_r($_POST);

	if(!isset($_POST['timeid'])){
		echo "plz select screen and time";
	}
	else if(empty($_POST['end_date'])){
		echo "Plz enter date";
	}
	else{
		$timeid = $_POST['timeid'];
		$movieid = $_POST['movieid'];
		$enddate = $_POST['end_date'];

		$str = "insert into mo_movie_screen (ms_screen_time_id,ms_screen_movie_id,ms_enddate) values ('$timeid','$movieid','$enddate') ";
		mysqli_query($conn,$str) or die(mysqli_error($conn));
		echo "record added";
	}

?>