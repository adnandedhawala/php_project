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
})