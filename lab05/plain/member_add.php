<pre>&lt;!DOCTYPE html&gt;



&lt;html&gt;



&lt;head&gt;

    &lt;meta charset="utf-8"&gt;

    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;

    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;title&gt;Web Development AUT&lt;/title&gt;



    &lt;!-- Custom CSS --&gt;

    &lt;link rel="stylesheet" href=""&gt;



    &lt;!-- Bootstrap CSS --&gt;

    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"&gt;



&lt;/head&gt;



&lt;body&gt;

    &lt;div class="jumbotron text-center"&gt;

        &lt;h1&gt;VIP Member Registration System&lt;/h1&gt;

        &lt;p&gt;Lab 05 - 18022146&lt;/p&gt;

    &lt;/div&gt;





    &lt;div class="container text-center"&gt;

        &lt;?php

        function createTableIfNotExist()

        {

            require "settings.php";



            // Create connection

            $conn = new mysqli($host, $user, $pswd, $dbnm);



            // Check connection

            if ($conn-&gt;connect_error) {

                die("Connection Failed: " . $conn-&gt;connect_error);

            }



            // echo "Connected Successfully";

            // echo "&lt;br&gt;";



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



            if ($conn-&gt;query($sql) === true) {

                //echo "Table vipmembers created successfully";

                //echo "&lt;br&gt;";

            } else {

                echo "Error creating table: " . $conn-&gt;error;

                echo "&lt;br&gt;";

            }



            $conn-&gt;close();

        }



        createTableIfNotExist(); // Call the function



        function addNewMemberForm()

        {

            require "settings.php";



            // Create connection

            $conn = new mysqli($host, $user, $pswd, $dbnm);



            // Check connection

            if ($conn-&gt;connect_error) {

                die("Connection Failed: " . $conn-&gt;connect_error);

            }



            // echo "Connected Successfully";

            // echo "&lt;br&gt;";



            $fName = $_POST['fname'];

            $lName = $_POST['lname'];

            $gender = $_POST['genderButton'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];



            $sql = "INSERT INTO vipmembers (fname, lname, gender, email, phone)

        VALUES ('$fName', '$lName', '$gender', '$email', '$phone')";



            if ($conn-&gt;query($sql) === true) {

                echo "New Record Created Successfully";

                echo "&lt;br&gt;";

            } else {

                echo "Error: " . $sql . "&lt;br&gt;" . $conn-&gt;error;

                echo "Please Re-Check Your Data";

                echo "&lt;br&gt;";

            }



            $conn-&gt;close();

        }



        addNewMemberForm(); // Call the function

        ?&gt;

    &lt;/div&gt;



    &lt;!-- Option 1: Bootstrap Bundle with Popper --&gt;

    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"&gt;&lt;/script&gt;

    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"&gt;&lt;/script&gt;



&lt;/body&gt;



&lt;/html&gt;</pre>