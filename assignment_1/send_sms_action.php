<?php  
	if(empty($_POST['sms_name']))echo("Enter Contact Name");
	else if(empty($_POST['sms_mobile'])) echo("Enter Mobile Number");
	else if(empty($_POST['sms_mess'])) echo ("No Message Written");
	else{
		//sms code written here
				// Authorisation details.
				$username = "adnan.d@somaiya.edu";
				$hash = "2deec47c9ee896b5b5592f3240a4457055c5ea02cbe96e01009d22f4ea4e50ab";

				// Config variables. Consult http://api.textlocal.in/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = "TXTLCL"; // This is who the message appears to be from.
				$numbers = "91".$_POST['sms_mobile']; // A single number or a comma-seperated list of numbers
				// echo($numbers);
				// exit;
				$message = $_POST['sms_mess'];
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.textlocal.in/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				// print_r($result);
				curl_close($ch);
				echo("message sent");
			//en of sms code
	}
?>