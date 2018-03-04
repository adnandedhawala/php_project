<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Assign Movie</h3>
	    <form id="assign_form">
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
	      <div class="enter_option" style="width: 100%;min-height: 30px;"></div>
	      <div id="enter_time" style="width: 100%;min-height: 30px;"></div>
	      <select name="movie_id">
	      	<option value="">Please Select Movie</option>
	      	<?php  
	      		$mov_res= mysqli_query($conn,"select * from cine_movie") or die(mysqli_error($conn));
	      		if($mov_res->num_rows>0):
	      			while($mov_ans=mysqli_fetch_assoc($mov_res)):
	      	?>
	      	<option value="<?php echo($mov_ans['mov_id']) ?>">
	      		<?php echo($mov_ans['mov_name']) ?>
	      	</option>
	      	<?php  
	      		endwhile;
	      		endif;
	      	?>
	      	
	      </select>
	      <input type="text" placeholder="enter end date" id="no_click" >
	      <input type="date" name="end_date" id="end_date" style="display: none;">
	      <input type="button" id="assign_button" value="Assign Movie" style="background-color: #d72a18; border: 0;">
	      <div style="height: 50px"></div>
	      <input type="text" id="assign_out" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>