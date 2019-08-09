<?php
	require_once 'dbconnect.php';
	$rec = $_POST['id'];
	// echo $rec;
	$str = "select sc_time_id,sc_time_name from mo_screen_time where sc_screen_id='$rec' ";
	$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

	echo "<select name='timeid'>";
	while( $ans = mysqli_fetch_assoc($result)){
		$name = $ans['sc_time_name'];
		$id = $ans['sc_time_id'];

		echo "<option value='$id'>$name</option>";
	}	
	echo "</select>";
?>