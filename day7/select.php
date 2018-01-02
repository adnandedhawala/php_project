<!-- select ka prog table k andar hai
this prog deletes the content from the table -->

<!--   -->

<?php 
	// there are three types of arrays num, associative and mixed.
	/*
	fetch_array(MYSQLI_NUM)
	fetch_array(MYSQLI_ASSOC)
	fetch_array()

	*/
	

	$result=mysqli_connect("localhost","root","","day6");
	$str="select id,name,salary from person ";

	// echo($str);

	$ans= $result->query($str) or die($result->error);
	// print_r($ans);

	if($ans->num_rows>0){
		echo "<table border='1'>";
		while ($rec=$ans->fetch_array()) {
			// print_r($rec);
			// echo "<br>";
			// print_r($ans);
			// echo "<br>";


			$x=$rec['id'];

			echo "<tr>";
				echo "<td>";
					echo($rec['id']);
				echo "</td>";
				echo "<td>";
					echo($rec['name']);
				echo "</td>";
				echo "<td>";
					echo($rec['salary']);
				echo "</td>";
				echo "<td>";
					echo"<a href= 'deletedata.php?abcd=$x'> DELETE </a>";
				echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else{
		echo "no data";
	}


	mysqli_close($result);
 ?>