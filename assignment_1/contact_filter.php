<?php  
// print_r($_POST);
	require_once 'db_connect.php';
	$str="select * from sms_mobile where contact_grid='".$_POST['cnt_id']."'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if($res->num_rows>0):
		while($ans=mysqli_fetch_assoc($res)):
?>
	<li>
		<a href="#" id="my" for="<?php echo($ans['contact_id']) ?>"> <?php echo($ans['contact_name']); ?> / <?php echo($ans['contact_mobile']) ?></a>
	</li>	

<?php  
	endwhile;
	endif;
?>
