this example can be used to detect file type


<?php 
	$fname= "rett.yolo.png";
	$arr= array("jpg","jpeg","png","gif");

	$ext=strchr($fname,".");// extracts all characters from the given character
	//echo($ext);

	$ext=strrchr($fname,".");
	//echo($ext);
	$fext=ltrim($ext,"."); //trims the spaces from left if the char is not mentioned
	// echo($fext);

	$result= in_array($fext, $arr);  //checks wether the given element is present in array or not. gives bool o/p

	if($result==1)echo "Valid file";
	else echo "InValid file";
 ?>