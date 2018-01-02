<?php 
	session_start();
	session_regenerate_id(true);//regenerates a new file
	unset($_SESSION); //clears the session
	session_destroy(); //closes the session
 ?>