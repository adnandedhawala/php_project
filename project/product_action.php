<?php  
	require_once 'db_connect.php';

	if(empty($_POST['pro_caid']))echo "Enter Category";
	else if(empty($_POST['pro_brid']))echo "Enter Brand";
	else if (empty($_POST['pro_name'])) echo "Enter Product name";
	else if (empty($_POST['pro_price'])||!is_numeric($_POST['pro_price'])||$_POST['pro_price']<0 || $_POST['pro_price']>100000) echo "enter valid price";
	else if (empty($_POST['pro_discount'])||!ctype_digit($_POST['pro_discount'])||$_POST['pro_discount']<=0 || $_POST['pro_discount']>99) echo "enter valid discount";
	else if(empty($_POST['pro_description'])||strlen($_POST['pro_description'])<10 ||strlen($_POST['pro_description'])>5000) echo "enter valid description";

	else{
		// echo("<pre>");
		// print_r($_FILES);
		// echo("</pre>");
		// exit;

		if(empty($_FILES['pro_path']['name'])) echo "pls select a Image";
		else if($_FILES['pro_path']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("image/jpeg","image/pjpeg","image/png","image/gif");//mime file types
			$filetype=$_FILES['pro_path']['type'];
			if(in_array($filetype, $arr)){
				$tmp=$_FILES['pro_path']['tmp_name'];
				$img_name="products/".time().$_FILES['pro_path']['name'];

				$file_ans =move_uploaded_file($tmp, $img_name);
				if($file_ans){
					$str_upload="insert into products(pro_name,pro_price,pro_discount,pro_description,pro_brid,pro_caid,pro_path) values('".$_POST['pro_name']."','".$_POST['pro_price']."','".$_POST['pro_discount']."','".$_POST['pro_description']."','".$_POST['pro_brid']."','".$_POST['pro_caid']."','$img_name')";
					$res=mysqli_query($conn,$str_upload) or die(mysqli_error($conn));
					if($res) echo "Product Added";
				}
				else{
					echo "Error in File Upload";
				}
			}
			else{
				echo "file type invalid";
			}
		}
	}


?>