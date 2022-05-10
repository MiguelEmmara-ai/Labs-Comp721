<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Development AUT</title>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://webdev.miguelemmara.me/wp-content/labs/lab05/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="jumbotron text-center">
        <h1>VIP Member Registration System</h1>
        <p>Lab 05 - 18022146</p>
    </div>


    <div class="container col-sm-7 pt-5">
        <h2>VIP Member Search Page</h2>
        <form action="member_search.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email">Last Name:</label>
                <input type="lname" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>

        <?php
        if (isset($_POST["lname"])) {
            $user_number = $_POST["lname"];

            echo "<table>";
            echo "<tr>";
            echo "<th>Member ID</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
            echo "<th>" . $name . "</th>";
            echo "</tr>";

            require_once "settings.php";

            // Create connection
            $conn = new mysqli($host, $user, $pswd, $dbnm);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT member_id, fname, lname, gender, email FROM vipmembers WHERE lname='$user_number'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["member_id"] . "</td><td>"  . $row["fname"] . "</td><td>"  . $row["lname"] . "</td><td>"  . $row["email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo " 0 results";
            }
            $conn->close();
        }
        echo "</table>";
        ?>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>