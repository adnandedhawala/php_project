<?php 
	$arr= array(978,978,785,365,978,654,1220,365);
	print_r($arr);
	echo "<br>";

	// array_push($arr, "hello"); //adds a element in last position
	// print_r($arr);

	// array_unshift($arr, "hello"); //adds the element in first position
	// print_r($arr);

	// array_shift($arr); // removes the element from first position
	// print_r($arr);

	// $ans= array_unique($arr);		//considers only unique characters 
	// print_r($ans);

	$ans= array_count_values($arr);		//the elements become the indices and indices become the number the elements occur
	print_r($ans);
 ?>