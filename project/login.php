<?php 
	session_start();
	if(isset($_SESSION['log_name'])){
		header("location:index.php");
	}
	require_once 'header.php';
 ?>


<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login_action.php" method="POST">
							<input type="text" placeholder="Email Address" name="log_email" />
							<input type="password" placeholder="Enter Password" name="log_password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="register_action.php" method="POST">
							<input type="text" placeholder="Name" name="log_name" />
							<input type="text" placeholder="contact number" name="log_mobile" />
							<input type="text" placeholder="Email Address" name="log_email" />
							<input type="password" placeholder="Password" name="log_password" />
							<input type="password" placeholder="Password" name="log_cpassword" />
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>	
		</div>
	</section><!--/form-->

 <?php 
	require_once 'footer.php';
  ?>