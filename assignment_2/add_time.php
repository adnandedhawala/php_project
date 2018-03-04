<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Add Screen Time</h3>
	    <form id="time_form">
	      <!-- <label for="ho"></label> -->
	      <select name="cinema_id" class="cinema_select">
	      	<option value="">Please Select Cinema</option>
	      	<?php  
	      		$cin_res= mysqli_query($conn,"select * from cine_cinema,cine_area where cin_area_id=area_id") or die(mysqli_error($conn));
	      		if($cin_res->num_rows>0):
	      			while($cin_ans=mysqli_fetch_assoc($cin_res)):
	      	?>
	      	<option value="<?php echo($cin_ans['cin_id']) ?>">
	      		<?php echo($cin_ans['area_name']." : ".$cin_ans['cin_name']) ?>
	      	</option>
	      	<?php  
	      		endwhile;
	      		endif;
	      	?>
	      	
	      </select>
	      <div class="enter_option" style="width: 100%;min-height: 30px;">
	      	
	      </div>
	      <input type="text" name="time_name" placeholder="Enter Time :- 00:00am/pm">
	      <input type="button" id="time_button" value="Add Time" style="background-color: #d72a18; border: 0;">
	      <div style="height: 110px"></div>
	      <input type="text" id="time_out" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>