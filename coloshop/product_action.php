<?php 
	
	require_once 'db_connect.php'; 
	// print_r($_POST)
	if(empty($_POST['pro_caid']))echo "Enter Category";
	else if (empty($_POST['pro_name'])) echo "Enter Product name";
	else if (empty($_POST['pro_price'])||!is_numeric($_POST['pro_price'])||$_POST['pro_price']<0 || $_POST['pro_price']>100000) echo "enter valid price";
	else if (empty($_POST['pro_discount'])||!ctype_digit($_POST['pro_discount'])||$_POST['pro_discount']<=0 || $_POST['pro_discount']>99) echo "enter valid discount";
	else if(empty($_POST['pro_description'])||strlen($_POST['pro_description'])<10 ||strlen($_POST['pro_description'])>5000) echo "enter valid description";
	else{
		if(empty($_FILES['pro_path']['name'])) echo "pls select a Image";
		else if($_FILES['pro_path']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("image/jpeg","image/pjpeg","image/png","image/gif");//mime file types
			if(in_array($_FILES['pro_path']['type'], $arr)){
				$tmp=$_FILES['pro_path']['tmp_name'];
				$path="products/".time().$_FILES['pro_path']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				if($file_upload){
					// echo("ok");
					$ca_res=mysqli_query($conn,"insert into products (pro_caid,pro_name,pro_price,pro_discount,pro_description,pro_path) values('".$_POST['pro_caid']."','".$_POST['pro_name']."','".$_POST['pro_price']."','".$_POST['pro_discount']."','".$_POST['pro_description']."','$path')") or die(mysqli_error($conn));
					if($ca_res) echo("ok");
				}
			}
			else{
				echo("error in file upload");
			}
		}
	}
	
?>
