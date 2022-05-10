<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Practicing string functions</title>
</head>

<body>
    <h1>Web Development – Lab 3 - 18022146</h1>
    <h2>Standard Palindrome Checker</h2>
    <?php
    if (isset($_POST['input'])) {
        $string = $_POST['input'];
        // Remove Special Characters from String Including Space
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
        echo "<p>Please enter string from the input form.</p>";
    }

    ?>
</body>

</html>