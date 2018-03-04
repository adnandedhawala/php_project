<?php  
	require_once 'header.php';
?>
	
<div class="change_password_page">
	<div class="change_password">
	    <h3>Add Movie</h3>
	    <form id="movie_form" method="post" enctype="multipart/form-data">
	      <!-- <label for="ho"></label> -->
	      <input type="text" name="movie_name" placeholder="Enter Movie Name">
	      <input type="date" name="movie_date" value="">
	      <input type="file" name="movie_img">
	      <textarea name="movie_desc" placeholder="Enter description"></textarea>
	      <input type="submit" id="movie_button" value="Add Movie" style="background-color: #d72a18; border: 0;">
	      <div style="height: 20px"></div>
	      <input type="text" id="movie_out" value="" disabled>

	   	</form>
  	</div>
</div>

<?php  
	require_once 'footer.php';
?>