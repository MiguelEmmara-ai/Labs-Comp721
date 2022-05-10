<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Development AUT</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="jumbotron text-center">
        <h1>VIP Member Registration System</h1>
        <p>Lab 05 - 18022146</p>
    </div>


    <div class="container text-center">
        <?php
        function createTableIfNotExist()
        {
            require "settings.php";

            // Create connection
            $conn = new mysqli($host, $user, $pswd, $dbnm);

            // Check connection
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }

            // echo "Connected Successfully";
            // echo "<br>";

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS vipmembers (
    member_id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(40) NOT NULL,
    lname VARCHAR(40) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

            if ($conn->query($sql) === true) {
                //echo "Table vipmembers created successfully";
                //echo "<br>";
            } else {
                echo "Error creating table: " . $conn->error;
                echo "<br>";
            }

            $conn->close();
        }

        createTableIfNotExist(); // Call the function

        function addNewMemberForm()
        {
            require "settings.php";

            // Create connection
            $conn = new mysqli($host, $user, $pswd, $dbnm);

            // Check connection
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }

            // echo "Connected Successfully";
            // echo "<br>";

            // GET ACCOUNT INFORMATION FROM FORM AND ASSIGN VARIABLES
            $fName = $_POST['fname'];
            $lName = $_POST['lname'];
            $gender = $_POST['genderButton'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO vipmembers (fname, lname, gender, email, phone)
        VALUES ('$fName', '$lName', '$gender', '$email', '$phone')";

            if ($conn->query($sql) === true) {
                echo "New Record Created Successfully";
                echo "<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "Please Re-Check Your Data";
                echo "<br>";
            }

            $conn->close();
        }

        addNewMemberForm(); // Call the function
        ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>