<?php  
	require_once 'header.php';
?>
	<div class="container" >
		<div class="row" style="min-height: 100px; margin-top: 200px;">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center login-form">
				<h3>Login HERE!</h3>
				<form id="login_form" >
					<div class="form-group">
						<input class="form-control" type="email" name="log_email" placeholder="Enter email ID">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="log_pass" placeholder="Enter Password">
					</div>
					
					<div class="form-group">
						<button type="button" id="login_button" class="btn btn-primary" style="background-color: #fe4c50; border: 0px;">Login</button>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>
<?php  
	require_once 'footer.php';
?>