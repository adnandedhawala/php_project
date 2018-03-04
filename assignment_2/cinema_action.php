<?php  
	require_once 'db_connect.php';
	// print_r($_POST)
	if(empty($_POST['c_area']))echo("Select Area");
	else if (!preg_match("/^[a-zA-Z -]{1,}$/",$_POST['cinema_name'])) echo $msg = "pls enter valid cinema name";
	else{
		$mov_res=mysqli_query($conn,"select cin_area_id from cine_cinema where cin_name ='".$_POST['cinema_name']."'") or die(mysqli_error($conn));
		// print_r($mov_res);
		if($mov_res->num_rows>0){
			while($mov_ans=mysqli_fetch_assoc($mov_res)){
				if($mov_ans['cin_area_id']==$_POST['c_area']){
					echo("Entry already exists");
					break;
				}
				else{
					$ans_res=mysqli_query($conn,"insert into cine_cinema(cin_name,cin_area_id) values('".$_POST['cinema_name']."','".$_POST['c_area']."') ");
					if($ans_res) echo($_POST['cinema_name']." is added");
				}
			}
		}
		else{
			$ans_res=mysqli_query($conn,"insert into cine_cinema(cin_name,cin_area_id) values('".$_POST['cinema_name']."','".$_POST['c_area']."') ");
			if($ans_res) echo($_POST['cinema_name']." is added");
		}

	}
?>