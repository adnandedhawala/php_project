<?php  
	require_once 'db_connect.php';
	if(empty($_POST['group_name']))echo "enter Group name";
	else{
		$lib_str="select * from sms_group where group_name ='".$_POST['group_name']."'";
		// echo($lib_str);
		$res_lib=mysqli_query($conn,$lib_str) or die(mysqli_error($conn));
		// print_r($res_lib);
		if($res_lib->num_rows>0)echo("group exists");
		else{
			$library_str="insert into sms_group(group_name) values('".$_POST['group_name']."')";
			// echo $library_str;
			$res_library=mysqli_query($conn,$library_str) or die($conn);
			if($res_library){
				echo "ok";
				// header("location:add_group.php");
			}
		}
	}

?>