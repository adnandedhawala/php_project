<?php  
	require_once 'header.php';
?>
<div class="container">
	<div class="row" style="min-height: 400px;margin-top: 15px; ">
		<div class="col-md-4">
			<h3>CONTACT <span style="color: #EA8513">GROUP</span></h3>
			<ul class="sms_list" style="list-style: none;">
				<?php  
					$res_gr=mysqli_query($conn,"select * from sms_group") or die(mysqli_error($conn));
					if($res_gr->num_rows>0):
						while($ans_gr=mysqli_fetch_assoc($res_gr)):
				?>
				<li>
					<a href="#" class="cnt_group" for="<?php echo($ans_gr['group_id']) ?>"><?php echo($ans_gr['group_name']); ?></a>
				</li>
				<?php  
					endwhile;
					endif;
				?>
			</ul>
			<h3>SHOW <span style="color: #EA8513">CONTACTS</span></h3>
			<ul class="sms_list" id="show_contacts" style="list-style: none;">
				<!-- <li></li> -->
			</ul>
				
		</div>
		<div class="col-md-4">
			<h3>SEND <span style="color: #EA8513">SMS</span></h3>
			<form id="send_sms_form">
    				<div class="form-group">
    					<input class="form-control" type="text" placeholder="Person" name="sms_name" id="send_sms_contact">
    				</div>
    				<div class="form-group">
    					<input class="form-control" type="text" placeholder="mobile" name="sms_mobile" id="send_sms_mobile" >
    				</div>
                    <div class="form-group">
    					<textarea name="sms_mess" class="form-control" id="send_sms_textarea" rows="4" placeholder="message" ></textarea>
                    </div>
    				<div class="form-group">
    					<button type="button" class="btn btn-primary" id="send_sms_button" style="background-color:#EC8F10; border-color:#EC8F10; ">Send SMS</button>
    				</div>
    			</form>
				
		</div>
		<div class="col-md-4">
			<h3>MESSAGE <span style="color: #EA8513">LIBRARY</span></h3>
			<ul class="sms_list" style="list-style: none;">
				<?php  
					$res_mes=mysqli_query($conn,"select * from sms_library") or die(mysqli_error($conn));
					if($res_mes->num_rows>0):
						while($ans_mes=mysqli_fetch_assoc($res_mes)):
				?>
				<li>
					<a href="#" class="cnt_lib" for="<?php echo($ans_mes['lib_id']) ?>"><?php echo($ans_mes['lib_name']); ?></a>
				</li>
				<?php  
					endwhile;
					endif;
				?>
			</ul>
			<h3>SHOW <span style="color: #EA8513">MESSAGE</span></h3>
			<ul class="sms_list" id="show_library" style="list-style: none;">
				
			</ul>

			
		</div>
	</div>
</div>

<?php  
	require_once 'footer.php';
?>