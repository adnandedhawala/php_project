<!-- hostname, username, password, database name -->
<!-- mysqli is used as it is newest library -->

<?php 
	$result=mysqli_connect("localhost","root","","day6");
	echo "<pre>";
	print_r($result);
	echo "</pre>";


	$ans=mysqli_close($result);
	echo "<hr>";

	var_dump($ans);
 ?>