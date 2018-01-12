<?php  
	require_once 'header.php';
	if(!isset($_SESSION['log_name']))header("location:logout.php");
	else{
		if($_SESSION['log_status']!=0)header("location:index.php");
	}
?>

<div class="form">
	<div id="signup">
		<form action="category_action.php" method="post">
			<div class="field-wrap">
            	<input type="text" name="ca_name" placeholder="Enter name"/>
        	</div>
			<div class="field-wrap">
            	<input type="text" name="ca_imgpath" placeholder="Enter image path"/>
        	</div>
        	<button type="submit" class="button button-block"/>Add Category</button>
		</form>
	</div>
      <!-- <form name='form-login'>
        	<span class="fontawesome-user"></span>
          	<input type="text" id="user" placeholder="Username">
       
       	 <span class="fontawesome-lock"></span>
          <input type="password" id"pass" placeholder="Password">
        
        	<input type="submit" value="Login">
      </form> -->
</div>

<?php  
	require_once 'footer.php';
?>