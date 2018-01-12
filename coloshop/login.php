<?php 
	require_once 'header.php' ; 
?>

<!-- <div class="container">
	<div class="row">
		<div class="col text center">
			
		</div>
	</div>
</div> -->

<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h2>Sign Up for Free</h2>
          
          <form action="register_action.php" method="post">
          
          <!-- <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div -->>

          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="text" name="log_name" placeholder="Enter name"/>
          </div>

          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="text" name="log_mobile" placeholder="Enter mobile"/>
          </div>

          <div class="field-wrap">
            <!-- <label>
              Email Address<span class="req">*</span>
            </label> -->
            <input type="email" name="log_email" placeholder="Enter Email" />
          </div>
          
          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" name="log_password" placeholder="Enter password"/>
          </div>

          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" name="log_cpassword" placeholder="confirm password"/>
          </div>
          
          <button type="submit" class="button button-block"/>Sign Up</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h2>Welcome Back!</h2>
          
          <form action="login_action.php" method="post">
          
            <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="email" name="log_email" placeholder="Enter email"/>
          </div>
          
          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" name="log_password" placeholder="Enter password"/>
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->   
  </div>

<?php  
require_once 'footer.php';
?>