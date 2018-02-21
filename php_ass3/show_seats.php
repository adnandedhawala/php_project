<?php
	include_once 'dbconnect.php';
	include_once 'header.php';

	$id = $_GET['record'];
	// echo $id;
	$timeid = $_GET['screentimeid'];
	$movieid = $_GET['movieid'];

	$str = "select * from mo_screen_seat where seat_screen_id='$id' order by seatno desc";

	$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
	// $ans = mysql_num_rows($result);

	// print_r($ans);
	if($result->num_rows>0):

		$sql = "select ms_enddate from mo_movie_screen where ms_screen_movie_id='$movieid' and ms_screen_time_id='$timeid'";
		$sql_res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$sql_ans = mysqli_fetch_assoc($sql_res);

		// print_r($sql_ans);

		$curdate = date('Y-m-d');
		$date1=date_create($curdate);
		// print_r($date1);
		$date2=date_create($sql_ans['ms_enddate']);
		$diff=date_diff($date1,$date2);
		// print_r($diff);
		$days = $diff->days;
		// echo $days;
		if($days>0):
			$date=date_create($curdate);
			echo "<form method='post' action='confirm_page.php'>";
			echo "Select Date : <select name='selected_date' >";			
			$nextdate = date_format($date,"d-M");
			echo "<option value=''>$nextdate</option>";
			for($st=1;$st<=$days;$st++):				
					date_add($date,date_interval_create_from_date_string("1 days"));
					$nextdate = date_format($date,"d-M");
					$selected_date = date_format($date,"Y-m-d");
					echo "<option value='$selected_date'>$nextdate</option>";		
			endfor;	
			echo "</select>";
			echo "<div style='clear:both'></div>";
			while($fans = mysqli_fetch_assoc($result)):
				$seatno = $fans['seatno'];
				$amount = ceil($fans['seat_amount']);
				echo "<div class='seatdata' for='$seatno'>$amount <br />($seatno)</div>";
			endwhile;

		endif;
			echo "<div style='clear:both'></div>";
			echo "<input type='text' id='seatids' name='seatids' /> ";

			echo "<input type='hidden'  name='movieid' value='$movieid'/> ";
			echo "<input type='hidden'  name='screenid' value='$id' /> ";
			echo "<input type='hidden'  name='screen_time_id' value='$timeid'/> ";

			echo "<input type='submit' value='Enter'/> ";
			echo "</form>";
	else:
		echo "No Record Found";
	endif;
	include_once 'footer.php';
?>
<style>
.seatdata{
	background-color: #ececec;
	width:75px;
	height:75px;
	border:1px solid #aaa;
	box-shadow: 1px 2px 4px #ccc;
	border-radius: 10px;
	float: left;
	margin:5px 10px;
	text-align: center;
	padding-top: 25px;
}
.bgclass{background-color: green;}
</style>
<script type="text/javascript">
	$(function(){
		var rec=[];
		$(".seatdata").click(function(){
			$(this).toggleClass("bgclass");
			var ans = $(this).attr("for");
			// alert(ans);
			var pos = rec.indexOf(ans);
			// alert(pos);
			if(pos==-1){
				rec.push(ans);	
			}
			else{
				rec.splice(pos,1);
			}
			rec.join(",");
			$("#seatids").val(rec);
			// console.log(rec);
		})
	});
</script>