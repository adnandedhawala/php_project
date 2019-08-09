<!-- study time function in php
add_cookie->show_cookie->delete_cookie -->

<?php 
	setcookie("product","kurta",time()+30,"/");//optional paramater - you pass it when you want store cookie for the whle domain .if it is not mentioned then cookie is created for that particular folder
	setcookie("amount",200,time()+30,"/");
 ?>

 <a href="show_cookie.php"> SHOW </a>