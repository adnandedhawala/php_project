<?php  
	// print_r($_POST)
	require_once 'db_connect.php';
?>
<select name="screen_time_id" class="screen_time_select">
	<option value="">Select Time</option>
	<?php  
		$time_ans=mysqli_query($conn,"select * from cine_screen_time where sc_time_screen_id='".$_POST['screenid']."'");
		if($time_ans->num_rows>0):
			while($time_res=mysqli_fetch_assoc($time_ans)):
	?>
	<option value="<?php echo($time_res['sc_time_id']) ?>">
		<?php echo($time_res['sc_time_name']) ?>
	</option>
	<?php  
		endwhile;
		endif;
	?>
</select>