<?php 
	require_once 'db_connect.php';

	$data = $_POST['br_name'];
	// echo $data;
	// exit; 	//exit is php command to break at this poin and exit php tag
	if ($data==NULL) {
		echo("enter valid category");
	}
	else{
		// print_r($conn);
		$str = "insert into brands (br_name) values ('$data') ";
		// echo $str;

		$result = mysqli_query($conn , $str) or die(mysqli_error($conn));
		// var_dump($result);

		if($result){
			header("location:add_brand.php");
		}

	}
 ?>