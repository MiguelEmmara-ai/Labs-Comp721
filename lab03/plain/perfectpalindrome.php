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

        function Palindrome($string)

        {

            // Base condition to end the recursive process

            if ((strlen($string) == 1) || (strlen($string) == 0)) {

                echo "Perfect Palindrome!";

            } else {



                // First character is compared with the last one

                if (substr($string, 0, 1) == substr($string, (strlen($string) - 1), 1)) {



                    // Checked letters are discarded and passed for next call

                    return Palindrome(substr($string, 1, strlen($string) - 2));

                } else {

                    echo "Not a Palindrome";

                }

            }

        }

        echo Palindrome($string);

    } else {

        echo "&lt;p&gt;Please enter string from the input form.&lt;/p&gt;";

    }



    ?&gt;

&lt;/body&gt;



&lt;/html&gt;</pre>