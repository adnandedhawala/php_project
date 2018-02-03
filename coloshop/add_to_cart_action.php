<?php  
	// print_r($_POST)
	if(!isset($_COOKIE['products'])){
		setcookie("products",$_POST['proid'],time()+3600,"/");
		echo("record added");
	}
	else{
		$newdata=$_COOKIE['products'].",".$_POST['proid'];
		setcookie("products",$newdata,time()+3600,"/");
		echo("record updated");
	}
?>