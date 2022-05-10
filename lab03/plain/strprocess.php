<pre>&lt;!DOCTYPE html&gt;

&lt;html&gt;



&lt;head&gt;

    &lt;meta http-equiv="content-type" content="text/html; charset=utf-8" /&gt;

    &lt;title&gt;Using string functions&lt;/title&gt;

&lt;/head&gt;



&lt;body&gt;

    &lt;h1&gt;Web Development – Lab 3 - 18022146&lt;/h1&gt;

    &lt;?php

    if (isset($_POST['input'])) {

        $str = $_POST['input'];

        $pattern = "/^[A-Za-z ]+$/";

        if (preg_match($pattern, $str)) {

            $ans = "";

            $len = strlen($str);

            for ($i = 0; $i &lt; $len; $i++) {

                $letter = substr($str, $i, 1);

                if (!is_numeric(strpos("AEIOUaeiou", $letter))) {

                    $ans = $ans . $letter;

                }

            }

            echo "&lt;p&gt;The word with no vowels is ", $ans, ".&lt;/p&gt;";

        } else {

            echo "&lt;p&gt;Please enter a string containing only letters or space.&lt;/p&gt;";

        }

    } else {

        echo "&lt;p&gt;Please enter string from the input form.&lt;/p&gt;";

    }



    ?&gt;

&lt;/body&gt;



&lt;/html&gt;</pre>