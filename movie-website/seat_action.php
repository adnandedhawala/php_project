<?php
	require_once 'dbconnect.php';
	// print_r($_POST);
	if(!isset($_POST['screenid'])){
		echo "plz select cinema hall";
	}
	else if($_POST['from_seat_no'] > $_POST['to_seat_no'])
	{
		echo "Invalid seats selected";
	}
	else if($_POST['amount']<=0)
	{
		echo "Invalid Amount";
	}
	else{
		// echo 1111;
		$screenid = $_POST['screenid'];
		$seatno1 = $_POST['from_seat_no'];
		$seatno2 = $_POST['to_seat_no'];
		$amt = $_POST['amount'];

		for($x = $seatno1 ; $x<=$seatno2 ; $x++){

			$cnt = "select count(*) as cnt from mo_screen_seat where seat_screen_id='$screenid' and seatno='$x' ";
			$result = mysqli_query($conn,$cnt) or  die(mysqli_error($conn));

			$ans = mysqli_fetch_assoc($result);
			// print_r($ans);
			// echo "<br />";
			if($ans['cnt']>0){
				$str = "update mo_screen_seat set seat_amount='$amt' where seat_screen_id='$screenid' and seatno='$x' ";
				mysqli_query($conn,$str) or  die(mysqli_error($conn));
			}
			else{
				$str = "insert into mo_screen_seat (seat_screen_id,seatno,seat_amount) values ('$screenid','$x','$amt') ";
				$result = mysqli_query($conn,$str) or die(mysqli_error($conn));	
			}	
		}		
		echo "Record Updated";
	}
?>