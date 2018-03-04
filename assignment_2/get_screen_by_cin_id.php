<?php  
	// print_r($_POST)
	require_once 'db_connect.php';
?>
<select name="screen_id" class="screen_select">
	<option value="">Select Screen</option>
	<?php  
		$time_ans=mysqli_query($conn,"select * from cine_screen where sc_cin_id='".$_POST['cinid']."'");
		if($time_ans->num_rows>0):
			while($time_res=mysqli_fetch_assoc($time_ans)):
	?>
	<option value="<?php echo($time_res['sc_id']) ?>">
		<?php echo($time_res['sc_name']) ?>
	</option>
	<?php  
		endwhile;
		endif;
	?>
</select>