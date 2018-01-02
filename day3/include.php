<?php 
	// include("dummy.php"); //gives warning and doesnot stop executionn if file doesnot exist
	// require("dummy.php"); 	//gives a fatal error and stops the execution if file doesnot exist

	include_once("dummy.php"); //checks wheter the filed has been called or not.if the file is called once it doesnt call it again.
	require_once("dummy.php");	 //checks wheter the filed has been called or not.if the file is called once it doesnt call it again.


 ?>