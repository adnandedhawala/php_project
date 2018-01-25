<?php  
    require_once 'header.php';
?>
<div class="container" >
    	<div class="row lib" style="min-height: 400px;margin-top: 15px">
    		<div class="col-md-6">
    			<h3>ADD <span style="color: #EA8513">MESSAGE</span></h3>
    			<form id="message_form">
    				<div class="form-group">
    					<select class="form-control" id="exampleFormControlSelect1" name="mes_lib_id">
					      <option value="">Select Library</option>
					      <?php  
    						$res=mysqli_query($conn,"select * from sms_library") or die(mysqli_error($conn));
    						if($res->num_rows>0):
    							while($ans=mysqli_fetch_assoc($res)):
						  ?>
					      <option value="<?php echo($ans['lib_id']) ?>"><?php echo($ans['lib_name']) ?></option>
					      <?php  
					      	endwhile;
					      	endif;
					      ?>

					    </select>
    				</div>
    				<div class="form-group">
    					<textarea name="sms_mess" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="enter you message"></textarea>
    				</div>
    				<div class="form-group">
    					<button type="button" class="btn btn-primary" id="message_button" style="background-color:#EC8F10; border-color:#EC8F10; ">Add Message</button>
    				</div>
    			</form>
    		</div>
    		 
    	</div>
</div>  
<?php  
	require_once 'footer.php';
?>