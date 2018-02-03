<?php  
	session_start();
	if(!isset($_SESSION['user_name'])){
		header("location:logout.php");
	}
	else{
		if($_SESSION['user_status']!=0){
			header("location:index.php");
		}
	}
	require_once 'header.php';
?>

<div style="min-height: 200px"></div>
<div class="container" >
		<div class="row" style="min-height: 100px;">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center login-form">
				<h3>Add Category</h3>
				<form id="category_form" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="ca_name" placeholder="Enter Category name">
					</div>
					<div class="form-group">
						<input type="file" name="ca_path" class="form-control" id="ca_file" >
					</div>
					<div class="form-group">
						<button type="submit" id="category_button" class="btn btn-primary" style="background-color: #fe4c50; border: 0px;">Add Category</button>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>

<?php  
	require_once 'footer.php';
?>

<!-- refer below link to use form to upload data and files using ajax -->
<!-- https://stackoverflow.com/questions/10899384/uploading-both-data-and-files-in-one-form-using-ajax -->
