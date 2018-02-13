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
						
						<form id="forgot_pass_form">
							<input type="text" placeholder="Email Address" name="forgot_email" />
							
							<button id="forgot_pass_button" type="button" class="btn btn-default btn_login">enter</button>
							<div class="msg1"></div>
						</form>
						
						<form id="otp_form">
							<input type="text" placeholder="Enter otp" name="forgot_otp" />
							
							<button type="button" id="otp_button" class="btn btn-default btn_login">enter</button>
							<div class="msg2"></div>

						</form>
						<form id="update_form" >
							<input type="password" placeholder="Enter Password" name="otp_pass" />
							<input type="password" placeholder="new Password" name="otp_npass" />
							
							<button type="button" id="update_button" class="btn btn-default btn_login">enter</button>
							<div class="msg3"></div>

						</form>
					</div><!--/login form-->
				</div>
				
			</div>	
		</div>
	</section><!--/form-->

 <?php 
	require_once 'footer.php';
  ?>