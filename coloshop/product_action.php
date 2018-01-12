<?php  
	require_once 'db_connect.php';

	if(empty($_REQUEST['pro_name']))echo "Enter Category Name";
	else if(empty($_REQUEST['pro_price']))echo "Enter price";
	else if(empty($_REQUEST['pro_discount']))echo "Enter discount";
	else if(empty($_REQUEST['pro_description']))echo "Enter description";
	else if(empty($_REQUEST['pro_caid']))echo "Enter proper category id";
	else if(empty($_REQUEST['pro_path']))echo "Enter image path";

	else{
		$name= $_REQUEST['pro_name'];
		$price=$_REQUEST['pro_price'];
		$discount=$_REQUEST['pro_discount'];
		$description=$_REQUEST['pro_description'];
		$id=$_REQUEST['pro_caid'];
		$path=$_REQUEST['pro_path'];

		$str="insert into products(pro_name,pro_price,pro_discount,pro_description,pro_caid,pro_path) values(
		'$name','$price','$discount','$description','$id','$path')";
		$ans=mysqli_query($conn,$str) or die($conn);
		if($ans){
			// header("location:add_product.php");
			echo "yes";
		}
	}


?>

