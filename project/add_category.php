<?php
	require_once 'header.php';
?>
<div class="container">
	<div class="login-form"><!--login form-->
		<h2>Add Category</h2>
		<form action="category_action.php" method="post">
			<input placeholder="Eg:- Mens Wear" type="text" name="cat_name">
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
<?php
	require_once 'footer.php';
?>