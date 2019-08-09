<?php 
	echo "<pre>";
	print_r($_FILES);//global 2D array for files
	echo "</pre>";

	$name=$_FILES['x3']['name'];
	// echo($name);

	$tmp= $_FILES['x3']['tmp_name'];
	// echo($tmp);

	$result=move_uploaded_file($tmp, $name);//temppath then filename
	var_dump($result);
 ?>