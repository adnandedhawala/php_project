<?php  
	require_once 'db_connect.php';
	// print_r($_POST)
	if(empty($_POST['cinema_id']))echo("Select Cinema");
	else if (!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/",$_POST['screen_name'])) echo $msg = "pls enter valid Screen name";
	else{
		$mov_res=mysqli_query($conn,"select sc_cin_id from cine_screen where sc_name ='".$_POST['screen_name']."'") or die(mysqli_error($conn));
		// print_r($mov_res);
		if($mov_res->num_rows>0){
			while($mov_ans=mysqli_fetch_assoc($mov_res)){
				if($mov_ans['sc_cin_id']==$_POST['cinema_id']){
					echo("Entry already exists");
					break;
				}
				else{
					$ans_res=mysqli_query($conn,"insert into cine_screen(sc_name,sc_cin_id) values('".$_POST['screen_name']."','".$_POST['cinema_id']."') ");
					if($ans_res) echo($_POST['screen_name']." is added");
				}
			}
		}
		else{
			$ans_res=mysqli_query($conn,"insert into cine_screen(sc_name,sc_cin_id) values('".$_POST['screen_name']."','".$_POST['cinema_id']."') ");
			if($ans_res) echo($_POST['screen_name']." is added");
		}

	}
?>