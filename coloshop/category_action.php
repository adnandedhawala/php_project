<?php  
	require_once 'db_connect.php';

	if(empty($_REQUEST['ca_name']))echo "Enter Category Name";
	else if(empty($_REQUEST['ca_imgpath']))echo "Enter proper image path";

	else{
		$name=$_REQUEST['ca_name'];
		$path=$_REQUEST['ca_imgpath'];

		$ca_str="select * from category where ca_name = '$name' ";
		$ca_res=mysqli_query($conn,$ca_str) or die($conn);
		// print_r($ca_res);
		if($ca_res->num_rows>0) echo "Category already exist";
		else{
			$str_ca="insert into category(ca_name,ca_imgpath) values ('$name','$path')";
			$res_str=mysqli_query($conn,$str_ca) or die($conn);
			if($res_str) header("location:add_category.php");
		}
	}
?>