<?php 
	require_once 'db_connect.php';
	// echo($_POST['lib_name']);
	if(empty($_POST['lib_name']))echo "enter library name";
	else{
		$lib_str="select * from sms_library where lib_name ='".$_POST['lib_name']."'";
		// echo($lib_str);
		$res_lib=mysqli_query($conn,$lib_str) or die(mysqli_error($conn));
		// print_r($res_lib);
		if($res_lib->num_rows>0)echo("library exists");
		else{
			$library_str="insert into sms_library(lib_name) values('".$_POST['lib_name']."')";
			// echo $library_str;
			$res_library=mysqli_query($conn,$library_str) or die($conn);
			if($res_library){
				echo "ok";
				// header("location:library.php");
			}
		}
	}
?>