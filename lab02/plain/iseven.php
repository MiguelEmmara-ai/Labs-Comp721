<pre>&lt;!DOCTYPE html&gt;

&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;



&lt;head&gt;

	&lt;meta http-equiv=content-type content=text/html; charset="utf-8" /&gt;

	&lt;meta name="description" content="Web Development :: Lab 1" /&gt;

	&lt;meta name="keywords" content="Web Development" /&gt;

	&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

	&lt;title&gt;Lab 2 - Factorial - 18022146&lt;/title&gt;

&lt;/head&gt;



&lt;body&gt;

	&lt;?php

	require_once('mathfunctions.php');

	if ($_POST["number"] &gt;= 1) {

		echo factorial($_POST["number"]);

	} else {

		echo "Please Input A Valid Positive Integer";

	}

	?&gt;



&lt;/body&gt;



&lt;/html&gt;</pre>