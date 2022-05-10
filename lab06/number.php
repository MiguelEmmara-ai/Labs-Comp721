<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php
session_start();
if (isset($_SESSION["number"])) {
    $_SESSION["number"] - 0;
}
$num = $_SESSION["number"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Session</title>
</head>

<body>
    <h1>Web Development - Lab 06</h1>
    <p>Miguel Emmara - 18022146</p>

    <?php echo "<p> The Number Is $num"; ?>

    <p><a href="numberup.php">UP</a></p>
    <p><a href="numberdown.php">DOWN</a></p>
    <p><a href="numberreset.php">Reset</a></p>

</body>

</html>