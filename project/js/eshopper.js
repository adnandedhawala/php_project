// alert(1)
$(function(){
// alert(1)
	
	$(".btn-register").click(function(){
		rec=$("#register_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"register_action.php",
			success:function(abc){
				$(".output").html(abc);
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$(".btn_login").click(function(){
		rec =$("#login_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"login_action.php",
			success:function(abc){
				if(abc=="ok"){
					window.location.href="index.php";
				}
				else{
				$(".login_output").html(abc);	
				}
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$(".btn_password").click(function(){
		rec=$("#password_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"password_action.php",
			success:function(abc){
				alert(abc);
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$(".filter_brand").click(function(aobj){
		aobj.preventDefault();
		// alert(1)
		rec=$(this).attr("for");
		// console.log(rec)

		$.post("brand_filter-wise-product.php","xyz="+rec,function(response){
			$(".padding-right").html(response);
		})
	})

	// $(".add-in-cart").click(function(aobj){
		$(document).on("click",".add-in-cart",function(aobj){
		aobj.preventDefault();
		// alert(1)
		rec= $(this).attr("for");
		// alert (rec);

		$.post("cart_action.php","xyz="+rec,function(response){
			// console.log(response);
			// alert(response);
			window.location.reload();
		})

	})

	$(".delete-from-cart").click(function(aobj){
		aobj.preventDefault();

		rec=$(this).attr("for");
		// alert(rec);
		$.post("delete_cart_action.php","msg="+rec,function(response){
			// alert(response);
			if(response=="ok") window.location.reload();
		})
	})


	$("#otp_form,#update_form").hide()
	$("#forgot_pass_button").click(function(){
		rec=$("#forgot_pass_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"forgot_action1.php",
			success:function(abc){
				if(abc=="ok"){
					$("#otp_form,#forgot_pass_form").slideToggle()
				}
				else{
					$(".msg1").html(abc);

				}
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$("#otp_button").click(function(){
		rec=$("#otp_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"forgot_action2.php",
			success:function(abc){
				if(abc=="ok"){
					$("#otp_form,#update_form").slideToggle()
				}
				else{
					$(".msg2").html(abc);

				}
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$("#update_button").click(function(){
		rec=$("#update_form").serialize();
		// alert(1)
		$.ajax({
			type:"post",
			data:rec,
			url:"forgot_action3.php",
			success:function(abc){
				
					$(".msg3").html(abc);

				
			},
			error:function(err){
				console.log(err);
			},
		})
	})
		
});