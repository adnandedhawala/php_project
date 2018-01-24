<?php  
	$data = $_POST['xyz'];
	// echo $data;

	if(!isset($_COOKIE['products'])){
		setcookie("products",$data,time()+3600,"/");
		echo "Record Added In Cart";
	}
	else{
		$newdata = $_COOKIE['products'].",".$data;
		// echo($newdata);
		setcookie("products",$newdata,time()+3600,"/");
		echo "Record Updted In Cart"; 
	}
?>