<?php 
	$result= mysqli_connect("localhost","root","","day6");

	$str= "update person set name='very', salary=9000 where id=1";

	$result->query($str) or die($result->error);

	mysqli_close($result);
 ?>