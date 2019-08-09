$(function(){
	// alert(1)
	$("#reg_button").click(function(){
		rec=$("#register_form").serialize();
		// alert(1)
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"register_action.php",
			success:function(msg){
				alert(msg);

			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#lib_button").click(function(){
		// alert(1)
		rec=$("#lib_form").serialize();
		// console.log(rec)

		$.ajax({
			type:"post",
			data:rec,
			url:"library_action.php",
			success:function(msg){
				if (msg=="ok") {
					window.location.href="add_library.php";
				}
				else{
					alert(msg);
				}
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$("#group_button").click(function(){
		// alert(1)
		rec=$("#group_form").serialize();
		// console.log(rec)

		$.ajax({
			type:"post",
			data:rec,
			url:"group_action.php",
			success:function(msg){
				if (msg=="ok") {
					window.location.href="add_group.php";
				}
				else{
					alert(msg);
				}
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$("#contact_button").click(function(){
		// alert(1)
		rec=$("#contact_form").serialize();
		// console.log(rec)

		$.ajax({
			type:"post",
			data:rec,
			url:"contact_action.php",
			success:function(msg){
				if (msg=="ok") {
					window.location.href="add_contact.php";
				}
				else{
					alert(msg);
				}
			},
			error:function(err){
				console.log(err);
			},
		})
	})

	$("#message_button").click(function(){
		// alert(1)
		rec=$("#message_form").serialize();
		// alert(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"message_action.php",
			success:function(response){
				alert(response);
			},
			error:function(err){
				alert(err);
			}
		})

	})


	$(".cnt_group").click(function(aobj){
		// alert(1)
		aobj.preventDefault();
		rec=$(this).attr("for");
		// alert(rec)
		$.post("contact_filter.php","cnt_id="+rec,function(response){
			// alert(response);
			$("#show_contacts").html(response);
			// window.location.href="send_sms.php";
		})	
	})

	$(document).on("click","#my",function(aobj){
		aobj.preventDefault();
		// alert(1);
		rec=$(this).attr("for");
		$.ajax({
			type:"post",
			data:"msg="+rec,
			url:"form_filter.php",
			dataType:"json",
			success:function(response){
				// alert(response['contact_mobile']);
				// alert(abc);
				$("#send_sms_contact").val(response['contact_name']);
				$("#send_sms_mobile").val(response['contact_mobile']);

			},
			error:function(err){
				alert(err);
			},

		})
	})

	$(document).on("click",".cnt_lib",function(aobj){
		aobj.preventDefault();
		rec=$(this).attr("for");
		// alert(rec)
		$.ajax({
			type:"post",
			data:"msg_lib="+rec,
			url:"message_filter.php",
			success:function(response){
				// alert(response)
				$("#show_library").html(response);
			},
			error:function(err){
				console.log(err);
			},
		})
	})
	

	$(document).on("click","#mysms",function(aobj){
		aobj.preventDefault();
		// alert(1)
		rec=$(this).attr("for");
		$.ajax({
			type:"post",
			data:"msg="+rec,
			url:"form_message_filter.php",
			success:function(response){
				// alert(response);
				$("#send_sms_textarea").text(response);
			},
			error:function(err){
				alert(err);
			},
		})
	})

	$(document).on("click","#send_sms_button",function(){
		// alert(1)
		rec=$("#send_sms_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"send_sms_action.php",
			success:function(response){
				alert(response);
			},
			error:function(err){
				alert(err);
			},
		})
	})
});