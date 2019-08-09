<?php 
	$id=$_GET['abcd'];
	echo($id);

	$result= mysqli_connect("localhost","root","","day6");

	$str= "delete from person where id=$id";

	$result->query($str) or die($result->error);

	mysqli_close($result);

	header("location:select.php");//redirects to given location
 ?>


 <!-- select.php -->