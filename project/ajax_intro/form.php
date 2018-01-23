<form id="formdata">
	<input type="text" name="username">
	<input type="password" name="userpass">
	<input type="button" class="btn" value="Enter">
</form>

<p id="msg">HELLO</p>
<script src="jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$(".btn").click(function(){
			rec = $("#formdata").serialize(); //serialize makes a string of all names in the form;separates data using ampercent
			console.log(rec);
			$.ajax({
				type:"post",
				data:rec,
				url:"form_action.php",
				success:function(xyz){
					$("#msg").html(xyz);
				},
				error:function(errmsg){
					console.log(errmsg);
				}
			})
		})
	});
</script>