<?php
	include_once 'header.php';
?>

	<div class="container">
		<div class="row">
			<form id="movie_data">
			<ul>
				<li>Movie Name</li>
				<li><input type="text" name="mov_name" placeholder="Gabbar"></li>

				<li>Movie Start Date</li>
				<li><input type="text" name="mov_start" placeholder="2016-09-20"></li>	

				<li>Select Image</li>
				<li><input type="file" name="mov_path" placeholder="Gabbar"></li>

				<li>Movie Desc</li>
				<li>
					<textarea name="mov_desc" cols="80" rows="6" placeholder="About Movie"></textarea>
				</li>

				<li><input type="button"  class="movbtn" value="Add"></li>
				<li id="err_movie"></li>
			</ul>
		</form>
		</div>
	</div>

<?php
	include_once 'footer.php';
?>

<script>
$(document).ready(function(){
	$(".movbtn").click(function(){
		//step1 : select form id and prepare form object
		var formobj = document.getElementById("movie_data");
		// alert(formobj);
		// step2: now create form data object by using form object
		var formdataobj = new FormData(formobj);
		// alert(formdataobj);

		// contentType:true => serialize => text/plain =>
		// processData:false
		$.ajax({
			type:"post",
			url:"movie_action.php",
			data:formdataobj,
			contentType:false,
			processData:false,
			success:function(response){
				$("#err_movie").html(response);
			},
			error:function(response){
				console.log(response.statusText);
			}
		});
	});
})
</script>