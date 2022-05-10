<pre>&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;

&lt;head&gt;

	&lt;meta http-equiv=content-type content=text/html; charset="utf-8" /&gt;
	&lt;meta name="description" content="Web Development :: Lab 1" /&gt;
	&lt;meta name="keywords" content="Web Development" /&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
	&lt;title&gt;Lab 2 - Days Array - 18022146&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

	&lt;h1&gt;Lab 2 - Days Array - 18022146&lt;/h1&gt;

	&lt;?php
	$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	echo "The Days of the week in English are: &lt;br&gt;";
	echo implode(', ', $days);
	?&gt;

	&lt;p&gt;&lt;/p&gt;

	&lt;?php
	$days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	echo "The Days of the week in French are: &lt;br&gt;";
	echo implode(', ', $days);
	?&gt;

&lt;/body&gt;

&lt;/html&gt;</pre>