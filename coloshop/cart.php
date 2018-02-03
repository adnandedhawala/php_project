<?php  
	require_once 'header.php';
?>
<div style="min-height: 120px"></div>
<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>My Cart</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid row my_pro" >

						<!-- Product 6 -->
						<?php 
							
							// exit;
						 	if(!isset($_COOKIE['products'])){
						 		echo("<h3> Cart is empty! </h3>");
						 	}
						 	else{
						 	$data=explode(",",$_COOKIE['products']);
							$data1=array_count_values($data);
							$pro_res=mysqli_query($conn,"select * from products,category where ca_id=pro_id and pro_id in(".$_COOKIE['products'].") order by pro_id ")or die(mysqli_error($conn));
							if($pro_res->num_rows>0):
								while($pro_ans=mysqli_fetch_assoc($pro_res)):
						?>
						<div class="product-item col-md-3">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo($pro_ans['pro_path']) ?>" alt="">
								</div>
								<!-- <div class="favorite favorite_left"></div> -->
								
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span><?php echo("X ".$data1[$pro_ans['pro_id']]) ?></span></div>
								
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo("-".$pro_ans['pro_discount']."%") ?></span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="#single.html"><?php echo($pro_ans['pro_name']) ?></a></h6>
									<div class="product_price"><?php 
										$dis=($pro_ans['pro_discount']/100)*$pro_ans['pro_price'];
										echo("$ ".($pro_ans['pro_price']-$dis));
									 ?><span><?php echo("$ ".$pro_ans['pro_price']) ?></span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a class="delete_cart" for="<?php echo($pro_ans['pro_id']) ?>" href="#">Delete from cart</a></div>
						</div>
						<?php  
							endwhile;
							endif;
						}

						?>
					</div>
				</div>
			</div>
			<div class="row" style="min-height: 150px;">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h3>Price Details</h3>
						<?php
/*

https://trinitytuts.com/payumoney-payment-gateway-integration-in-php/


Test Card Number: 5123456789012346
Test CVV: 123
Test Expiry: May 2017

*/

// Merchant key here as provided by Payu
// $MERCHANT_KEY = "hDkYGPQe";
$MERCHANT_KEY = "6PqKSK15";
 
// Merchant Salt as provided by Payu
// $SALT = "yIEkykqEH3";
$SALT = "sAOVPuJG2X";
 
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
 
$action = '';
 
$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
 
  }
}
 
$formError = 0;
 
if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
   || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
 $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = ''; 
 foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
 
    $hash_string .= $SALT;
 
 
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <!-- <h2>PayU Form</h2> -->
    <br/>
    <?php if($formError) { ?>
 
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form  action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td style="display: none;"><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr style="display: none;">
          <td>Success URI: </td>
          <?php $posted['surl']="http://localhost/coloshop/success.php"; ?>
          <td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr style="display: none;">
          <td >Failure URI: </td>
          <?php $posted['furl']="http://localhost/coloshop/failure.php"; ?>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>
 
        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
 
        <tr style="display: none;">
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr style="display: none;">
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr style="display: none;">
          <td>Address1: </td>
          <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr style="display: none;">
          <td>City: </td>
          <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr style="display: none;">
          <td>Country: </td>
          <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr style="display: none;">
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr style="display: none;">
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr style="display: none;">
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        <tr >
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Proceed to Pay" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>




					</div>
				</div>
			</div>
		</div>
	</div>
<?php  
	require_once 'footer.php';
?>