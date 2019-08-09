<?php
		//print_r($_GET);

		$ans=$_GET['data'];
		//echo $ans;


		$res=explode(",", $ans);
		//print_r($res);

?>

<table border="1">
	<?php

	for($i=0;$i<=4;$i++){
		$fans=$res[$i];

		echo "<tr><td>$fans</td></tr>";
	}


	?>