<?php  
	require_once 'header.php';
?>
<div class="container" >
    	<div class="row lib" style="min-height: 400px;margin-top: 15px">
    		<div class="col-md-6" >
    			<h4>GROUPS</h4>
    			<ul class="liblist">
    			<?php  
    				$libstr="select * from sms_group";
    				$libres=mysqli_query($conn,$libstr) or die(mysqli_error($conn));
    				if($libres->num_rows>0):
    					while($anslib=mysqli_fetch_assoc($libres)):
    			?>
					<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"> </i> <?php echo($anslib['group_name']) ?></a></li>
				<?php  
					endwhile;
					endif;
				?>
				</ul>
    		</div>
    		<div class="col-md-6">
    			<h3>ADD <span style="color: #EA8513">GROUP</span></h3>
    			<form id="group_form">
    				<div class="form-group">
    					<input class="form-control" type="text" placeholder="Group name" name="group_name">
    					<br>
    					<button type="button" class="btn btn-primary" id="group_button">Submit</button>
    				</div>
    			</form>
    		</div>
    		 
    	</div>
   </div>  
<?php  
	require_once 'footer.php';
?>