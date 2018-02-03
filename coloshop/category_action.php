<?php  
	// print_r($_POST);
	require_once 'db_connect.php';
	if(!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/", $_POST['ca_name']))echo("Enter a valid Category");
	else{
		// echo("<pre>");
		// print_r($_FILES);
		// echo("</pre>");
		if(empty($_FILES['ca_path']['name'])) echo "pls select a Image";
		else if($_FILES['ca_path']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("image/jpeg","image/pjpeg","image/png","image/gif");//mime file types
			if(in_array($_FILES['ca_path']['type'], $arr)){
				$tmp=$_FILES['ca_path']['tmp_name'];
				$path="category_images/".time().$_FILES['ca_path']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				if($file_upload){
					// echo("ok");
					$ca_res=mysqli_query($conn,"insert into category(ca_name,ca_path) values('".$_POST['ca_name']."','$path')") or die(mysqli_error($conn));
					if($ca_res) echo("ok");
				}
			}
			else{
				echo("error in file upload");
			}
		}
	}
?>

