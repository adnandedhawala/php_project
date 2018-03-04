<?php  
  require_once 'header.php';
 ?>
        <div class="content">
          <div class="show_seat">
          	<?php  
                $mo_res=mysqli_query($conn,"select msc_movie_end_date from cine_movie_screen where msc_movie_id='".$_GET['movieid']."'") or die(mysqli_error($conn));
                $mo_ans=mysqli_fetch_assoc($mo_res);
          	?>
            <div class="show_date">Select Date:- <input type="date" id="final_date" min="2018-04-03" max="<?php echo($mo_ans['msc_movie_end_date']) ?>"></div>
            <div class="seat_header" style="text-align: center;margin-top: 1%;margin-bottom: 1%;"><h5 >Select Seats</h5></div>
            <div class="seats">
            	<?php  
               		$seat_res=mysqli_query($conn,"select * from cine_seat where seat_sc_id='".$_GET['screen_id']."'") or die(mysqli_error($conn));
               		if($seat_res->num_rows>0):
               			while($seat_ans=mysqli_fetch_assoc($seat_res)):
            	?>
            	<div class="seat_info" for="<?php echo($seat_ans['seat_no']) ?>">
            		<div style="margin-top: 35%;width: 100%">
            			<a >₹ <?php echo($seat_ans['seat_amount']) ?></a>
		        		<br>
		        		<a> (<?php echo($seat_ans['seat_no']) ?>)</a>
            		</div>	
            	</div>
            	<?php  
            		endwhile;
            		endif;
            	?>	
            </div>
            <div class="selected_seats">
            	<input style="font-size: 20px; width: 60%;" type="text" name="" id="sel_seats">
            	
					
					    
					    <form id="ticket_form" action="confirm.php" method="post">
					      <input type="hidden" name="mov_date" id="watch_date">
					      <input type="hidden" name="mov_seats" id="watch_seats">
					      <input type="hidden" name="mov_mov_id" value="<?php echo($_GET['movieid']) ?>">
					      <input type="hidden" name="mov_screen_id" value="<?php echo($_GET['screen_id']) ?>">
					      <input type="hidden" name="mov_screen_time" value="<?php echo($_GET['screentimeid']) ?>">
	    				  <input type="submit" id="screen_button" value="Enter" style="background-color: #d72a18; margin-top: 2%; border: 0;padding: 1%;color: #eee">

					   	</form>
				  	
					
            </div>

          </div>
        

        </div>
      </div>
      		

<?php  
  require_once 'footer.php';
?>