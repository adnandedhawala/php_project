<?php  
	require_once 'db_connect.php';
	
	if(empty($_POST['cinema_id']))echo("Select Cinema");
	else if(empty($_POST['screen_id']))echo("Select Screen");
	else if(empty($_POST['screen_time_id']))echo("Select Screen Time");
	else if(empty($_POST['movie_id']))echo("Select Movie");
	else if(empty($_POST['end_date']))echo("Select end_date");


	else{
		// print_r($_POST);
		$chk=mysqli_query($conn,"select * from cine_movie_screen where msc_sc_time_id='".$_POST['screen_time_id']."' and msc_movie_id='".$_POST['movie_id']."'") or die(mysqli_error($conn));
		if($chk->num_rows>0)echo("entry already exist");
		else{
			$result=mysqli_query($conn,"insert into cine_movie_screen(msc_sc_time_id,msc_movie_id,msc_movie_end_date) values('".$_POST['screen_time_id']."','".$_POST['movie_id']."','".$_POST['end_date']."')")or die(mysqli_error($conn));
			if($result) echo("record added");	
		}	

	}

?>