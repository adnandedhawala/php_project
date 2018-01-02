<form method="GET" action="">
	<input type="text" name="x1" placeholder ="enter name">
	<input type="text" name="x2" placeholder ="enter salary">
	<input type="submit"  value="ENTER">

</form>
<hr>
<?php 
	$ans= mysqli_connect("localhost","root","","day6");
	// print_r($_GET);

	$uname=$_GET['x1'];
	$usal=$_GET['x2'];

	$str="insert into person(name,salary) values('$uname','$usal')";

	$ans->query($str) or die($ans->error);

	mysqli_close($ans);
 ?>