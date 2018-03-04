<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Form Handling</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
	<body>

		<?php
			$title = $_POST["title"];
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$address = $_POST["address"];
			$year = $_POST["year"];
			
			$currentYear = 2017;
			
			$age = $currentYear - $year;
			
	
	
		?>
	
		<p><?php	print("Hello, " . $title . " " . $lname . " " . $fname . " of " . $address . "."); ?></p>
			
		<p><?php	print("You will be " . $age . " this year."); ?></p>
	
		


		

	</body>
</html>