<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Practicing string functions</title>
</head>

<body>
    <h1>Web Development – Lab 3 - 18022146</h1>
    <h2>Perfect Palindrome Checker</h2>
    <?php
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
        echo "<p>Please enter string from the input form.</p>";
    }

    ?>
</body>

</html>