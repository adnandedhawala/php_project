<?php
	require_once 'dbconnect.php';
	// print_r($_POST);
	$id = $_POST['cinemaid'];
	// echo $id;
	$str = "select screen_id,screen_name from mo_screen where screen_cin_id='$id'";
	// echo $str;
	$result = mysqli_query($conn,$str) or die(mysqli_error($conn));

	echo "<select name='screenid' class='screenid'>";
	while($ans = mysqli_fetch_assoc($result)){
		// print_r($ans);
		$scrid = $ans['screen_id'];
		$scrname = $ans['screen_name'];
		echo "<option value='$scrid'>$scrname</option>";
		// echo "<br />";
	}
	echo "</select>"
?>