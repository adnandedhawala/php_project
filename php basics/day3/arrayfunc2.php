<?php 
	$arr= array("jpg","jpeg","png","gif");
	print_r($arr);

	// unset($arr[2]); //removes the desired element from the array with its index
	// print_r($arr);

	// $x=10;
	// echo($x);
	// unset($x); //removes the variable
	// echo($x);


	// array_pop($arr); //implements pop(queue); 
	// print_r($arr);

	// $ans= array_search("doc", $arr);
	// var_dump($ans);

	$ans= array_rand($arr); //gives a random number from available indices(positions) 
	print_r($ans);
	echo "<br>";
	echo $arr[$ans];

 ?>