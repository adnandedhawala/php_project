<?php  
	require_once 'db_connect.php';
	if (!preg_match("/^[0-9a-zA-Z -]{1,}$/",$_POST['movie_name'])) echo $msg = "pls enter valid movie name";
	else if(empty($_POST['movie_date'])) echo("Select a Movie date");
	else if(empty($_POST['movie_desc'])||strlen($_POST['movie_desc'])<10 ||strlen($_POST['movie_desc'])>5000) echo "enter valid description";
	else{
		if(empty($_FILES['movie_img']['name'])) echo "pls select a Image";
		else if($_FILES['movie_img']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("image/jpeg","image/pjpeg","image/png","image/gif");//mime file types
			if(in_array($_FILES['movie_img']['type'], $arr)){
				$tmp=$_FILES['movie_img']['tmp_name'];
				$path="movies/".time().$_FILES['movie_img']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				if($file_upload){
					$mov_ans=mysqli_query($conn,"insert into cine_movie(mov_name,mov_path,mov_desc,mov_date) values('".$_POST['movie_name']."','$path','".$_POST['movie_desc']."','".$_POST['movie_date']."')");
					if($mov_ans)echo("movie added");
				}
				
			}
			else{
				echo("error in file upload");
			}
		}
	}


?>