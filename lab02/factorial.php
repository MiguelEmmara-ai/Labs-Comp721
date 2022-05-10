<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv=content-type content=text/html; charset="utf-8" />
	<meta name="description" content="Web Development :: Lab 1" />
	<meta name="keywords" content="Web Development" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lab 2 - Factorial - 18022146</title>
</head>

<body>
	<?php
	require_once('mathfunctions.php');
	if ($_POST["number"] >= 1) {
		echo factorial($_POST["number"]);
	} else {
		echo "Please Input A Valid Positive Integer";
	}
	?>

</body>

</html>