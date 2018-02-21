<?php
	session_start();
	echo session_id();

	$_SESSION['name'] = "ajay";
?>