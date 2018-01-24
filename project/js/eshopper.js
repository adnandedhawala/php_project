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

	$(".add-in-cart").click(function(aobj){
		aobj.preventDefault();
		// alert(1)
		rec= $(this).attr("for");
		// alert (rec);

		$.post("cart_action.php","xyz="+rec,function(response){
			// console.log(response);
			alert(response);
		})

	})
});