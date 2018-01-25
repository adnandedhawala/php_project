<?php  
	require_once 'header.php';
?>
<div class="container" >
    	<div class="row lib" style="min-height: 400px;margin-top: 15px">
    		<div class="col-md-5">
    			<h3>Change <span style="color: #EA8513">Password</span></h3>
    			<form action="change_password_action.php" method="post">
    				<div class="form-group">
                        <input class="form-control" type="password" placeholder="Enter Current Password" name="cpass"> 
    				</div>
    				<div class="form-group">
    					<input class="form-control" type="password" placeholder="Enter new Passsword" name="npass">
    				</div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Confirm new Passsword" name="cnpass">
                    </div>
    				<div class="form-group">
    					<button type="submit" class="btn btn-primary" style="background-color:#EC8F10; border-color:#EC8F10; ">Change Password</button>
    				</div>
    			</form>
    		</div>
    	</div>
</div>  
<?php  
	require_once 'footer.php';
?>