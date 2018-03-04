<?php  
	require_once 'db_connect.php';
	// print_r($_POST)
	if (!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/",$_POST['area_name'])) echo $msg = "pls enter valid name";
	else{
		$mov_res=mysqli_query($conn,"select area_id from cine_area where area_name ='".$_POST['area_name']."'") or die(mysqli_error($conn));
		// print_r($mov_res);
		if($mov_res->num_rows>0){
			echo("Area name already exist");
		}
		else{
			$ans_res=mysqli_query($conn,"insert into cine_area(area_name) values('".$_POST['area_name']."') ");
			if($ans_res) echo($_POST['area_name']." is added");
		}

	}
?>