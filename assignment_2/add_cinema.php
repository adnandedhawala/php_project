<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Add Cinema</h3>
	    <form id="cinema_form">
	      <!-- <label for="ho"></label> -->
	      <select name="c_area">
	      	<option value="">Please Select Area</option>
	      	<?php  
	      		$cin_res= mysqli_query($conn,"select * from cine_area") or die(mysqli_error($conn));
	      		if($cin_res->num_rows>0):
	      			while($cin_ans=mysqli_fetch_assoc($cin_res)):
	      	?>
	      	<option value="<?php echo($cin_ans['area_id']) ?>">
	      		<?php echo($cin_ans['area_name']) ?>
	      	</option>
	      	<?php  
	      		endwhile;
	      		endif;
	      	?>
	      	
	      </select>
	      <input type="text" name="cinema_name" placeholder="Enter Cinema">
	      <input type="button" id="cinema_button" value="Add Cinema" style="background-color: #d72a18; border: 0;">
	      <div style="height: 150px"></div>
	      <input type="text" id="cinema_out" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>