<pre>&lt;!DOCTYPE html&gt;

&lt;html&gt;



&lt;head&gt;

    &lt;meta http-equiv="content-type" content="text/html; charset=utf-8" /&gt;

    &lt;title&gt;Practicing string functions&lt;/title&gt;

&lt;/head&gt;



&lt;body&gt;

    &lt;h1&gt;Web Development – Lab 3 - 18022146&lt;/h1&gt;

    &lt;?php

    if (isset($_POST['input'])) {

        $string = $_POST['input'];

        /// Remove Special Characters from String Including Space

        $cleanStr = preg_replace('/[^A-Za-z0-9]/', '', $string);

        $cleanStrLower = strtolower($cleanStr);

        $newString = $cleanStrLower;

        function Palindrome($string)

        {

            // Return 11 if Palindrome

            if (strrev($string) == $string) {

                return 1;

                // Return 11 if Palindrome    

            } else {

                return 0;

            }

        }

        if (Palindrome($newString)) {

            echo "Palindrome!";

        } else {

            echo "Not a Palindrome!";

        }

    } else {

        echo "&lt;p&gt;Please enter string from the input form.&lt;/p&gt;";

    }



    ?&gt;

&lt;/body&gt;



&lt;/html&gt;</pre>