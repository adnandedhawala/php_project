<?php  
// print_r($_POST);
	require_once 'db_connect.php';
	$str="select * from sms_message where sms_libid='".$_POST['msg_lib']."'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if($res->num_rows>0):
		while($ans=mysqli_fetch_assoc($res)):
?>
	<li>
		<a href="#" id="mysms" for="<?php echo($ans['sms_id']) ?>"> <?php echo($ans['sms_message']); ?> </a>
	</li>	

<?php  
	endwhile;
	endif;
?>
