<?php
	$data = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam';

	echo $data;
	echo "<hr />";

	echo strlen($data);
	echo "<hr />";

	echo strtoupper($data);
	echo "<hr />";
	echo strtolower($data);
	echo "<hr />";

	echo ucwords($data);
	echo "<hr />";

	echo substr($data,0,5);
	echo "<hr />";

	echo substr($data,-5);
	echo "<hr />";

	echo substr($data,0,-5);
?>


