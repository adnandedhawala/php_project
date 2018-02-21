<?php
	require_once 'dbconnect.php';
	// print_r($_POST);	

	$reg_mov = "/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/";
	$res_mov = preg_match($reg_mov,$_POST['mov_name']);

	if($res_mov!=1){
		echo "Movie Name Invalid";
	}
	else if(strlen($_POST['mov_desc']) < 10 || strlen($_POST['mov_desc']) > 1000){
		echo "Invalid Movie Description";
	}
	else{
		// echo 1;
		// echo "<pre>";
		// print_r($_FILES);

		$name = $_FILES['mov_path']['name'];
		// echo $name;
		$type = $_FILES['mov_path']['type'];
		// echo $type;
		$size = $_FILES['mov_path']['size'];
		// echo $size;
		if(empty($name)){
			echo "Please select image for Movie";
		}
		else if($type!="image/jpeg" && $type!="image/png" && $type!="image/gif"){
			echo "Invalid File Uploaded";
		}
		//1mb => 1024*1024 * 2
		else if( $size > 1024*1024 * 2){
			echo "File Size Large";
		}
		else{
			// echo 1111;
			//file upload with unique name
			$unique = "upload/".time().$name;
			// echo $unique;
			$buffpath = $_FILES['mov_path']['tmp_name'];			
			$res = move_uploaded_file($buffpath, $unique);
			// var_dump($res);
			// echo 1;
			if($res==1){
				$name = $_POST['mov_name'];
				$date = $_POST['mov_start'];
				$path = $unique;
				$desc = $_POST['mov_desc'];

				$str = "insert into  mo_movie (mov_name,mov_desc,mov_path,mov_start) values ('$name','$desc','$path','$date')";
				mysqli_query($conn,$str) or die(mysqli_error($conn));

				echo "Added";
			}
		}
	}
?>