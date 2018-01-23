<?php 
	session_start();
	if(!isset($_SESSION['log_name'])){
		header("location:logout.php");
	}
	require_once 'header.php';
 ?>


<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="password_form">
							<input type="password" placeholder="Enter Current Password" name="cpass" /> <!-- current password -->
							<input type="password" placeholder="Enter new Password" name="npass" /> <!-- new password -->
							<input type="password" placeholder="Confirm new Password" name="cnpass" /> <!-- confirm new password -->

							<button type="button" class="btn btn-default btn_password">Update</button>
						</form>
						
					</div><!--/login form-->
				</div>
				
				</div>
			</div>	
		</div>
	</section><!--/form-->

 <?php 
	require_once 'footer.php';
  ?>