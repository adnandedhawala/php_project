<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Add Area</h3>
	    <form id="area_form">
	      <!-- <label for="ho"></label> -->
	      <input type="text" name="area_name" placeholder="Enter Area">
	      <input type="button" id="area_button" value="Add Area" style="background-color: #d72a18; border: 0;">
	      <div style="height: 180px"></div>
	      <input type="text" id="area_value" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>