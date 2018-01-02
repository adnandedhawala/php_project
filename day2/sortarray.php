<?php 
	$rec=[1020,798,64,45462];
	
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	sort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	rsort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	asort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	arsort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	ksort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";

	krsort($rec);
	echo "<pre>";
	print_r($rec);
	echo "</pre>";
	echo "<hr>";




 ?>