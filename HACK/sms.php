<?php
	$to="+8801782123643@vtext.com";
	$from = "ankurat1314@gmail.com";
	$message = "This is a text message\nNew line...";
	$headers = "From: $from\n";
	mail($to,'',$message,$headers);
?>