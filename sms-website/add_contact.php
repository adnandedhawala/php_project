<?php  
	require_once 'header.php';
?>
<div class="container" >
    	<div class="row lib" style="min-height: 400px;margin-top: 15px">
    		<div class="col-md-5">
    			<h3>ADD <span style="color: #EA8513">CONTACT</span></h3>
    			<form id="contact_form">
    				<div class="form-group">
    					<select class="form-control" id="exampleFormControlSelect1" name="contact_grid">
					      <option value="">Select Group</option>
					      <?php  
    						$res=mysqli_query($conn,"select * from sms_group") or die(mysqli_error($conn));
    						if($res->num_rows>0):
    							while($ans=mysqli_fetch_assoc($res)):
						  ?>
					      <option value="<?php echo($ans['group_id']) ?>"><?php echo($ans['group_name']) ?></option>
					      <?php  
					      	endwhile;
					      	endif;
					      ?>

					    </select>
    				</div>
    				<div class="form-group">
    					<input class="form-control" type="text" placeholder="Enter name" name="contact_name">
    				</div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter mobile" name="contact_mobile">
                    </div>
    				<div class="form-group">
    					<button type="button" class="btn btn-primary" id="contact_button" style="background-color:#EC8F10; border-color:#EC8F10; ">Add Contact</button>
    				</div>
    			</form>
    		</div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <h3>Contact <span style="color: #EA8513">Person</span></h3>
                   <ul class="list">
                   <?php
                        $con_res=mysqli_query($conn,"select * from sms_mobile");
                        if($con_res->num_rows>0):
                            while($con_ans=mysqli_fetch_assoc($con_res)):
                   ?>
                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo($con_ans['contact_name']); ?></a><span style="float:right;"><?php echo($con_ans['contact_mobile']); ?></span></li>
                    <?php  
                        endwhile;
                        endif;
                    ?>
                    </ul>
            </div>
    		 
    	</div>
</div>  
<?php  
	require_once 'footer.php';
?>