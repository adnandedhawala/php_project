<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Add Seats</h3>
	    <form id="seat_form">
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
	 
	      <input type="text" placeholder="enter seat numbers" id="no_click1" >
	      <div style="width: 100%; min-height: 30px; display: none;" id="seat_num">
	      	<input type="number" name="from_seat" min="1" max="20" style="width: 30%;display: inline-block;"> to :
	      	<input type="number" name="to_seat" min="1" max="20" style="width: 30%;display: inline-block;">
	      </div>
	      <input type="text" placeholder="enter amount" id="no_click2" >
	      <div style="width: 100%; min-height: 30px; display: none;" id="seat_amt">
	      	<input type="number" min="1" name="seat_amount">
	      </div>

	      <input type="button" id="seat_button" value="Add Seat" style="background-color: #d72a18; border: 0;">
	      <div style="height: 80px"></div>
	      <input type="text" id="seat_out" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>