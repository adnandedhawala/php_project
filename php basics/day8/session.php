<!-- see xamp->php->php.ini -->
<!-- xampp/temp -->
<?php 
	session_start();
	echo session_id();
	print_r($_SERVER);

	$_SESSION['name']="qwertyuiop";
	$_SESSION['age']=50;

 ?>
 <a href="show_session.php"> SHOW </a>