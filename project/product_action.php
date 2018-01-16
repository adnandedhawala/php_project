<?php  
	require_once 'db_connect.php';

	if(empty($_POST['pro_caid']))echo "Enter Category";
	else if(empty($_POST['pro_brid']))echo "Enter Brand";
	else if (empty($_POST['pro_name'])) echo "Enter Product name";
	else if (empty($_POST['pro_price'])||!is_numeric($_POST['pro_price'])||$_POST['pro_price']<0 || $_POST['pro_price']>100000) echo "enter valid price";
	else if (empty($_POST['pro_discount'])||!ctype_digit($_POST['pro_discount'])||$_POST['pro_discount']<=0 || $_POST['pro_discount']>99) echo "enter valid discount";
	else if(empty($_POST['pro_description'])||strlen($_POST['pro_description'])<10 ||strlen($_POST['pro_description'])>5000) echo "enter valid description";

	else{
		// echo "chalo";
	}


?>