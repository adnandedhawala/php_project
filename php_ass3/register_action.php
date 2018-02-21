<?php
	//load database connection
	include("dbconnect.php");

	//get all data from register.php using method
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	//do validation

	//name validation
	$exp_name = "/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/";
	$txt_name = $_POST['pname'];

	$result_name = preg_match($exp_name,$txt_name);
	// echo $result_name;

	if($result_name!=1){
		echo "Invalid name";
	}
	else{
		//mobile validation
		$exp_mob = "/^[1-9][0-9]{9}$/";
		$txt_mob = $_POST['pmob'];

		$result_mob = preg_match($exp_mob,$txt_mob);
		// echo $result_mob;
		if($result_mob!=1){
			echo "Invalid Mobile";
		}
		else{
			//emailid validation
			$exp_email = "/^([a-z0-9][a-z0-9_\.]{1,}[a-z0-9])@([a-z0-9][a-z0-9\-]{1,}[a-z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/";
			$txt_email = $_POST['pemail'];

			$res_email = preg_match($exp_email,$txt_email);
			// echo $res_email;
			if($res_email!=1){
				echo "Invalid Email Id";
			}
			else{
				$exp_pass = "/^[a-zA-Z0-9]{4,12}$/";
				$txt_pass = $_POST['ppass'];
				$result_pass = preg_match($exp_pass,$txt_pass);
				// echo $result_pass;
				if($result_pass!=1 || $_POST['ppass']!=$_POST['cpass']){
					echo "invalid Password";
				}
				else{



					//insert into register table
					// echo "ok";
					$name = $_POST['pname'];
					$mob = $_POST['pmob'];
					$gen = $_POST['pgen'];
					$email = $_POST['pemail'];
					$pass = sha1($_POST['ppass']);


					$str = "select count(*) as cnt from userdetails where pemailid='$email'";

					// echo $str;
					$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
					// var_dump($result);

					//mysql_fetch_object() => object
					//mysql_fetch_row() => numeric array
					//mysql_fetch_assoc() => associative array
					//mysql_fetch_array() => numeric and associative
					$ans = mysqli_fetch_assoc($result);
					// print_r($ans);
					// exit();

					if($ans['cnt'] > 0){
						echo "Emailid already exist";
					}
					else{
						// echo $pass;
						$str = "insert into userdetails (pname,pmobile,pemailid,pgender,ppass)  values ('$name','$mob','$email','$gen','$pass') ";
						// echo $str;
						$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
						// echo $result;
						if($result==1){
							echo "Record Added";
						}
					}
				}
			}
		}
	}
?>	