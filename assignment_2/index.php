<?php 
  require_once 'header.php';
 ?>
        <div class="content">
          <h3>Feature <span>Movies</span></h3>
          <ul class="movies">
            <?php  
              $dis_res=mysqli_query($conn,"select * from cine_movie where mov_date <= (select curdate() )") or die(mysqli_error($conn));
              if($dis_res->num_rows>0):
                while($disp_ans=mysqli_fetch_assoc($dis_res)):
            ?>
            <li>
              <h4><?php echo($disp_ans['mov_name']) ?></h4>
              <img src="<?php echo($disp_ans['mov_path']) ?>" alt="" />
              <p style="height: 120px"><?php echo($disp_ans['mov_desc']) ?></p>
              <div class="wrapper"><a href="show_movie.php?movid=<?php echo($disp_ans['mov_id']) ?>"><button class="link2"><span><span>Book Tickets</span></span></button></a></div>
              
            </li>
            <?php  
              endwhile;
              endif;
            ?>
            

            <li class="clear">&nbsp;</li>
          </ul>
        

        </div>
      </div>
      

<?php  
  require_once 'footer.php';
?>