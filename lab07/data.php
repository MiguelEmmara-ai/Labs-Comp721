<!--file data.php -->
<?php
// get name and password passed from client
$name = $_POST["name"];
$pwd = $_POST["pwd"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdev_aut";
$table = "lab07";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM $table WHERE Names = '$name' AND Password = '$pwd'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "Email: " . $row["Email_Address"];
    echo "<br>";
  }
} else {
  echo "0 results <br>'$query'";
}
$conn->close();

// sleep for 10 seconds to slow server response down
sleep(1);
// write back the password concatenated to end of the name
// echo ($name . " : " . $pwd);
?>