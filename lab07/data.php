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

$query = "SELECT * FROM $table WHERE Names = '$name'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Email: ". $row["Email_Address"];
    echo "<br>";
  }
} else {
  echo "0 results <br>'$query'";
}
$conn->close();



// @mysqli_select_db($conn, $stuID) or die("Cant select the database");
// if (!$conn) {
//     echo "<p>Database connection failure</p>";
// } else {

//     $query = "select * from '$table' where name = '$name';";

//     $result = mysqli_query($conn, $query);

//     if (!$result) {
//         echo "<p>Something is wrong with ",    $query, "</p>";
//     } else {



//         while ($row = mysqli_fetch_assoc($result)) {

//             echo "email: ", $row["name"];
//         }


//         mysqli_free_result($result);
//     } // if successful query operation

//     // close the database connection
//     mysqli_close($conn);
// } // if successful database connection	



// sleep for 10 seconds to slow server response down
sleep(1);
// write back the password concatenated to end of the name
echo ($name . " : " . $pwd);
?>