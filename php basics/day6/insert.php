<?php 
	$result=mysqli_connect("localhost","root","","day6");
	#sql query for creating a table with the following columns
	/*
		create table person(
			id int auto_increment primary key,
			name varchar(100),
			salary int
		);
	*/
	$str="insert into person(name,salary) values('harry',5009)";
	// echo($str);


	# to fire the query we write sql command in a variable and use mysli_connect ka variable to run it using query(function) 
	$ans=$result->query($str) or die($result->error);
	// var_dump($ans);
	#or die is used to execute something if error occurs
	//resut-> error shows what error has occured

	mysqli_close($result);

 ?>