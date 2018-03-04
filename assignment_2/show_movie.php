<?php 
  require_once 'header.php';
  // $id=$_GET['movid'];
 ?>
        <div class="content">
          <div class="show_movie">
            <div class="mov_details">
              <?php  
                $mo_res=mysqli_query($conn,"select * from cine_movie where mov_id='$id'") or die(mysqli_error($conn));
                if($mo_res->num_rows>0)$mo_ans=mysqli_fetch_assoc($mo_res);
              ?>
              <h5><?php echo($mo_ans['mov_name']) ?></h5>
              <img src="<?php echo($mo_ans['mov_path']) ?>">
              <h6>Release Date:- <?php echo($mo_ans['mov_date']) ?></h6>
              <p style="margin-top:10px; display: block;">
                <?php echo($mo_ans['mov_desc']) ?>
              </p>
            </div>
            <div class="mov_selection">
              <?php  
                $str="select area_name,cin_id,cin_name,sc_id,sc_time_id,sc_time_name from cine_area,cine_cinema,cine_movie,cine_movie_screen,cine_screen,cine_screen_time where cin_area_id=area_id and sc_cin_id=cin_id and sc_time_screen_id = sc_id and msc_sc_time_id=sc_time_id and msc_movie_id = mov_id and mov_id='$id'";
                $str_res=mysqli_query($conn,$str) or die(mysqli_error($conn));
                if($str_res->num_rows>0):
                  while($str_ans=mysqli_fetch_assoc($str_res)):
              ?>
              <div class="mov_show_selection">
                <h5><?php echo($str_ans['cin_name']) ?> : <?php echo($str_ans['area_name']) ?></h5>
                <a href="show_seats.php?movieid=<?php echo($id) ?>&screen_id=<?php echo($str_ans['sc_id']) ?>&screentimeid=<?php echo($str_ans['sc_time_id']) ?>"><?php echo($str_ans['sc_time_name']) ?></a>
              </div>
              <?php  
                endwhile;
                endif;
              ?>
            </div>
          </div>
        

        </div>
      </div>
      

<?php  
  require_once 'footer.php';
?>