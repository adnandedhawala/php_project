<?php  
	require_once 'db_connect.php';
	
	if(empty($_POST['cinema_id']))echo("Select Cinema");
	else if(empty($_POST['screen_id']))echo("Select Screen");
	else if(empty($_POST['from_seat'])||empty($_POST['to_seat'])||$_POST['from_seat']>$_POST['to_seat'])echo("Invalid seat numbers");
	else if(empty($_POST['seat_amount'])||$_POST['seat_amount']==0)echo("Invalid amount");
	else{
		for ($x=$_POST['from_seat']; $x <=$_POST['to_seat'] ; $x++) { 
			$seat_res=mysqli_query($conn,"select * from cine_seat where seat_sc_id='".$_POST['screen_id']."' and seat_no='$x'") or die(mysqli_error($conn));
			if($seat_res->num_rows>0){
				$seat_res=mysqli_query($conn,"update cine_seat set seat_amount='".$_POST['seat_amount']."' where seat_sc_id='".$_POST['screen_id']."' and seat_no='$x'");
			}
			else{
				$seat_res=mysqli_query($conn,"insert into cine_seat (seat_no,seat_amount,seat_sc_id) values('$x','".$_POST['seat_amount']."','".$_POST['screen_id']."')") or die(mysqli_error($conn));

			}
		}
		echo("record updated");	
	}

?>