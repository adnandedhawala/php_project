<?php
	session_start();
	if(!isset($_SESSION['useremail'])){
		header("location:logout.php");
	}

	// print_r($_SESSION);

	echo "welcome ".$_SESSION['useremail'];
?>

<a href="password.php">change password</a>

<a href="logout.php">Logout</a>