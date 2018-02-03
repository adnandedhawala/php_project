<?php  
	// print_r($_POST)
	$cookiearr=explode(",", $_COOKIE['products']);
	foreach ($cookiearr as $key => $value) {
		if($value==$_POST['del_id']) unset($cookiearr[$key]);
	}
	$newdata=implode(",", $cookiearr);
	setcookie("products",$newdata,time()+3600,"/");
	echo("ok");
?>