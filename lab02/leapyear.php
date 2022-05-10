<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv=content-type content=text/html; charset="utf-8" />
	<meta name="description" content="Web Development :: Lab 1" />
	<meta name="keywords" content="Web Development" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lab 02 - Leap Year Checker - 18022146</title>
</head>

<body>

	<?php
	// PHP code to check if a given
	// year is leap year

	$inputYear = $_POST["number"];

	function checkYear($year)
	{
		// If a year is multiple of 400,
		// then it is a leap year
		if ($year % 400 == 0)
			print("This Year You Entered $year Is A Leap Year.");

		// Else If a year is multiple of 100,
		// then it is not a leap year
		else if ($year % 100 == 0)
			print("This Year You Entered $year Is A Standard Year.");

		// Else If a year is multiple of 4,
		// then it is a leap year
		else if ($year % 4 == 0)
			print("This Year You Entered $year Is A Leap Year.");

		else
			print("This Year You Entered $year Is A Standard Year.");
	}

	checkYear($inputYear);
	?>

	<br>
	<br>

	<?php
	// PHP code to check if a given
	// year is leap year

	$inputYear = $_POST["number"];

	function is_leapyear($year)
	{

		// Return true if year is a multiple
		// 0f 4 and not multiple of 100.
		// OR year is multiple of 400.
		return ((($year % 4 == 0) &&
			($year % 100 != 0)) ||
			($year % 400 == 0));
	}

	is_leapyear($inputYear)? print("True"):
                  print("False");
	?>

</body>

</html>