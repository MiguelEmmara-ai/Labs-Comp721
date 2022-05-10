<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>

<body>

    <h1>Use of PHP built-in function</h1>

    <?php
    /* use of abs() and pow() built-in functions, and echo statement. */
    echo "<p>Absolute value of -9 is: ", abs(-9), ".</P>";
    echo "<p>2 to the power of 5 is: ", pow(2, 5), ".</P>";
    ?>

    <hr>
    <?php
    /* use of decbin() and bindec()  functions. */
    echo "<p>Decimal equivalent of 1101 is: ", bindec(1101), ".</P>";
    echo "<p>Binary equivalent of 14 is: ", decbin(14), ".</P>";
    ?>


</body>

</html>