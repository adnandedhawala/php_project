<!-- print_r can print simple as well as complex stuff
eco cannot print complex stuff -->

<!-- pre tag is a html tag used for printing data in a format mentioned between pre tags -->

<?php 
	$rec=[45,56,12,"test"];
	echo "<pre>";
	print_r($rec);
	echo "</pre>";

	echo "<hr>";

	echo $rec[0];
	echo "<br>";
	print_r($rec[0]);

	echo "<hr>";
	echo array_sum($rec);
	echo "<br>";
	echo array_product($rec);	

	echo "<pre>";
	pre
		prev
			pre
	echo "</pre>";

 ?>