<?php  
	if(session_id()=="")session_start();

	$conn=mysqli_connect("localhost","root","","cinema");

	// print_r($conn);
?>