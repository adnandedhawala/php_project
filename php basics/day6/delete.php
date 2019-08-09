<?php 
	$result= mysqli_connect("localhost","root","","day6");

	$str= "delete from person where id=1";

	$result->query($str) or die($result->error);

	mysqli_close($result);
 ?>