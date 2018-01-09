<?php 
	require_once 'header.php';
?>
<div class="container">
	<div class="login-form">
		<h2>Add Brand</h2>
		<form action="brand_action.php" method="post">
			<input placeholder="Eg:- PUMA" type="text" name="br_name">
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>

<?php 
	require_once 'footer.php';
?>