$(document).ready(function(){
  $("a.new_window").attr("target", "_blank");


 });


$(function(){

	// $('.box_display').hide();
	// $('.login_page').hide();	
	$('.home_button').click(function(){
		// alert(1)
		$('.home_button.active').removeClass('active');
		$(this).addClass('active');

		if($(this).hasClass('oone')){
			 $('.box_display').hide();
		}
		else{
			 $('.box_display').show();
		}

	})
	$('#login_ref').click(function(a){
		a.preventDefault();
		// alert(1);
		$('.login_page').slideToggle();

	})

	$("#register_button").click(function(){
		rec=$('#register_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"register_action.php",
			success:function(abc){
				// alert(abc);
				if(abc=="ok") window.location.reload();
				else alert(abc);
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$('.drop_btn').click(function(){
		// alert(1)
		// e.preventDefault();
		$('.dropdown-content').slideToggle();
	})

	$('.drop_btn_name').click(function(){
		// alert(1)
		// e.preventDefault();
		$('.dropdown-content_name').slideToggle();
	})


	$('#change_pass').click(function(a){
		// alert(1)
		a.preventDefault();
		// $('.change_password_page').slideToggle();
	})

	$("#change_password_button").click(function(){
		rec=$('#change_password_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"change_password_action.php",
			success:function(abc){
				// alert(abc);
				if(abc=="ok") {
					alert("password changed");
					window.location.href='index.php';
				}
				else alert(abc);
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#area_button").click(function(){
		rec=$('#area_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"area_action.php",
			success:function(abc){
				
				$('#area_value').val(abc);
				window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#cinema_button").click(function(){
		rec=$('#cinema_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"cinema_action.php",
			success:function(abc){
				// alert(abc);
				$('#cinema_out').val(abc);
				window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#movie_form").submit(function(a){
		a.preventDefault();
		// alert(1)
		rec=new FormData(this);
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"movie_action.php",
			contentType:false,
			cache:false,
			processData:false,
			success:function(abc){
				// alert(abc);
				$('#movie_out').val(abc);
				if(abc=="movie added")window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#screen_button").click(function(){
		rec=$('#screen_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"screen_action.php",
			success:function(abc){
				// alert(abc);
				$('#screen_out').val(abc);
				window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$(".cinema_select").change(function(){
		// alert(1)
		rec= $(this).val();
		// alert(rec)
		$.post("get_screen_by_cin_id.php","cinid="+rec,function(response){
			// alert(response);
			$(".enter_option").html(response);
		})
	})

	$("#time_button").click(function(){
		rec=$('#time_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"time_action.php",
			success:function(abc){
				// alert(abc);
				$('#time_out').val(abc);
				if(abc=="time added")window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#no_click").click(function(){
		$("#no_click,#end_date").slideToggle();
	})

	$("#no_click1").click(function(){
		$("#no_click1,#seat_num").slideToggle();
	})

	$("#no_click2").click(function(){
		$("#no_click2,#seat_amt").slideToggle();
	})

	$(document).on("change",".screen_select",function(){
		// alert(1)
		rec= $(this).val();
		// alert(rec)
		$.post("get_screen_time_by_scid_id.php","screenid="+rec,function(response){
			// alert(response);
			$("#enter_time").html(response);
		})
	})

	$("#assign_button").click(function(){
		rec=$('#assign_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"assign_action.php",
			success:function(abc){
				// alert(abc);
				$('#assign_out').val(abc);
				if(abc=="record added"||abc=="entry already exist")window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	$("#seat_button").click(function(){
		rec=$('#seat_form').serialize();
		// console.log(rec)
		$.ajax({
			type:"post",
			data:rec,
			url:"seat_action.php",
			success:function(abc){
				// alert(abc);
				$('#seat_out').val(abc);
				if(abc=="record updated")window.location.reload();
			},
			error:function(err){
				console.log(err);
			}
		})
	})

	var seat=[];
	$(".seat_info").click(function(){
		$(this).toggleClass("bgclass");
		var rec=$(this).attr('for');
		var pos=seat.indexOf(rec);
		if(pos==-1){
			seat.push(rec);
		}
		else{
			seat.splice(pos,1);
		}
		seat.join(",");
		$("#sel_seats").val(seat);
		$("#watch_seats").val(seat);
		// console.log(seat);
	})

	$("#final_date").change(function(){
		rec=$("#final_date").val();
		// alert(rec);
		$("#watch_date").val(rec);
	})

});
