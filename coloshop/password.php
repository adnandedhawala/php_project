<?php  
	require_once 'header.php';
?>
<div style="min-height: 200px"></div>
<div class="container">
	<div class="row" style="min-height: 150px">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center login-form">
		<h3>Change Password</h3>
		<form id="password_form">
			<div class="form-group">
				<input class="form-control" type="password" name="log_pass" placeholder="Enter current Password">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="log_npass" placeholder="Enter new Password">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="log_cnpass" placeholder="Confirm new Password">
			</div>
			<div class="form-group">
				<button type="button" id="password_button" class="btn btn-primary" style="background-color: #fe4c50; border: 0px;">Change Password</button>
			</div>
			
		</form>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php  
	require_once 'footer.php';
?>