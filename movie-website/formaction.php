<?php
	//HOST,USER,PASS
	mysql_connect("localhost","root","");
	$conn = mysql_select_db("a_rakhee");
	// var_dump($conn);
	// echo $conn;
	if($conn==1){
		// print_r($_POST);
		$data1 = $_POST['x1'];
		$data2 = $_POST['x2'];
		// echo $data1;

		//insert query prepare
		$str = "insert into record (number1,number2) values ('$data1','$data2')";
		// echo $str;

		//insert query execution
		$result = mysql_query($str) or die(mysql_error());

		// var_dump($result);
		// echo $result;
		if($result==1){
			echo "Record Added";
		}
	}
	else{
		echo "Error in DB Connect";
	}
?>
