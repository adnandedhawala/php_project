<!-- implode is used to join strings . parameters passed are joining char and array/strings
explode is reversal of implode. -->


<?php 
	$rec = [3,8,1996];
	print_r($rec);
	echo "<hr>";

	$res= implode("/", $rec);
	echo $res;
	echo "<hr>";

	$dob= explode("/", $res);
	print_r($dob);
	// var_dump($dob);

	$age=date('Y')-$dob[2];
	echo "<br>";
	echo($age);


 ?>