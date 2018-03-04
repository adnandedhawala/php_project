<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
    <h3>Change Password</h3>
    <form id="change_password_form">
      <!-- <label for="ho"></label> -->
      <input type="password" name="log_cpass" placeholder="Enter Current Password">
      <input type="password" name="log_npass" placeholder="Enter New Password">
      <input type="password" name="log_cnpass" placeholder="Confirm New Password">
      <input type="button" id="change_password_button" value="Change Password" style="background-color: #d72a18; border: 0;">
    </form>
  </div>
</div>

<?php  
	require_once 'footer.php';
?>