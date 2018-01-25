<?php  
	// print_r($_POST['msg']);

	$cookiearray=explode(",", $_COOKIE['products']);
	// print_r($cookiearray);
	foreach ($cookiearray as $key => $value) {
		if($_POST['msg']==$value) unset($cookiearray[$key]);
	}
	// print_r($cookiearray);
	$newdata=implode(",",$cookiearray);

	setcookie("products",$newdata,time()+3600,"/");
	echo("ok");

?>