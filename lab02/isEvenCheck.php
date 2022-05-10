<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv=content-type content=text/html; charset="utf-8" />
	<meta name="description" content="Web Development :: Lab 1" />
	<meta name="keywords" content="Web Development" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lab 02 - Is Even Checker - 18022146</title>
</head>

<body>
	<?php
	$t = date("H");

	if ($_POST["number"] % 2 == 0) {
		echo "Even";
	} else {
		echo "Odd";
	}
	?>
</body>

</html>