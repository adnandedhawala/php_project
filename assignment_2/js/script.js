<<<<<<< HEAD
$(document).ready(function(){
  $("a.new_window").attr("target", "_blank");


 });


$(function(){

	$('.box_display').hide();
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

	$('.drop_btn').click(function(){
		// alert(1)
		// e.preventDefault();
		$('.dropdown-content').slideToggle();
	})
=======
$(document).ready(function(){
  $("a.new_window").attr("target", "_blank");


 });


$(function(){

	$('.box_display').hide();
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

	$('.drop_btn').click(function(){
		// alert(1)
		// e.preventDefault();
		$('.dropdown-content').slideToggle();
	})
>>>>>>> 9d7e309dd22f01eedbc853be66ace0e7f65e9cc5
});