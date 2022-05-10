<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Using string functions</title>
</head>

<body>
    <h1>Web Development – Lab 3 - 18022146</h1>
    <h2>Vowel Check</h2>
    <?php
    if (isset($_POST['input'])) {
        $str = $_POST['input'];
        $pattern = "/^[A-Za-z ]+$/";
        if (preg_match($pattern, $str)) {
            $ans = "";
            $len = strlen($str);
            for ($i = 0; $i < $len; $i++) {
                $letter = substr($str, $i, 1);
                if (!is_numeric(strpos("AEIOUaeiou", $letter))) {
                    $ans = $ans . $letter;
                }
            }
            echo "<p>The word with no vowels is ", $ans, ".</p>";
        } else {
            echo "<p>Please enter a string containing only letters or space.</p>";
        }
    } else {
        echo "<p>Please enter string from the input form.</p>";
    }

    ?>
</body>

</html>