<?php 
	$arr= [8,4,45];
	print_r($arr);

	echo "<hr>";
	foreach ($arr as $ans) {
		echo($ans)."	";
	}

	echo "<hr>";
	foreach ($arr as $key => $value) {
		echo($ans)."	".$key; //key is index and value is element of the array arr
		echo "<br>";
	}

 ?>