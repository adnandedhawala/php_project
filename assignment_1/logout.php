<?php  
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['log_name']);
	unset($_SESSION['log_email']);
	unset($_SESSION['log_id']);
	unset($_SESSION['log_mobile']);
	session_destroy();
	header("location:index.php");

?>