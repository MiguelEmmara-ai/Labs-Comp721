<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Development - Lab 05 - 18022146</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://webdev.miguelemmara.me/wp-content/labs/lab05/style.css">
</head>

<body>
    <h1>Retrieve And Display Records From The Table</h1>
    <h2>Cars Display</h2>

    <table>
        <tr>
            <th>Car ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
        </tr>
        <?php
        require_once("settings.php");

        // complete your answer here //

        // Create connection
        $conn = new mysqli($host, $user, $pswd, $dbnm);

        // Check connection
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        // echo "Connected Successfully";
        echo "<br>";
        echo "<br>";

        $sql = "SELECT car_id, make, model, price FROM cars";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["car_id"] . "</td><td>"  . $row["make"] . "</td><td>"  . $row["model"] . "</td><td>"  . $row["price"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo " 0 results";
        }
        $conn->close();

        ?>
    </table>

</body>

</html>