<?php  
  require_once 'header.php';
  if(!isset($_SESSION['log_name']))header("location:logout.php");
  else{
    if($_SESSION['log_status']!=0)header("location:index.php");
  }
?>

<div class="form">
	<div id="signup">
		<form action="product_action.php" method="post">
			<div class="field-wrap">
        <input type="text" name="pro_name" placeholder="Enter name"/>
      </div>
      <div class="field-wrap">
        <input type="text" name="pro_price" placeholder="Enter price"/>
      </div>
      <div class="field-wrap">
        <input type="text" name="pro_discount" placeholder="Enter discount"/>
      </div>
      <div class="field-wrap">
        <input type="text" name="pro_description" placeholder="Enter description"/>
      </div>
      <div class="field-wrap">
        <input type="text" name="pro_caid" placeholder="Enter category ID"/>
      </div>
			<div class="field-wrap">
        <input type="text" name="pro_path" placeholder="Enter image path"/>
      </div>
      <button type="submit" class="button button-block"/>Add Product</button>
		</form>
	</div>
</div>

<?php  
	require_once 'footer.php';
?>