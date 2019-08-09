<!-- <table border=1>
	<tr>
		<td>1</td>
		<td>yo</td>
	</tr>
	<tr>
		<td>2</td>
		<td>yo</td>
	</tr>			
</table> -->

<table border="1">
	<?php
		for($i=1;$i<=5;$i++){
			echo "<tr><td>$i</td><td>yo</td></tr>";
		}
	?>
</table> 


<table border=1>

	<?php
		$i=1;
		while($i<=5){
			echo "<tr><td>$i</td><td>yo</td></tr>";
			$i++;
		}
	?>
</table> 
