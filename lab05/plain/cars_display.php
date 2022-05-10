<pre>&lt;!DOCTYPE html&gt;



&lt;html&gt;



&lt;head&gt;

    &lt;meta charset="utf-8"&gt;

    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;

    &lt;title&gt;Web Development - Lab 05 - 18022146&lt;/title&gt;

    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;link rel="stylesheet" type="text/css" href="https://webdev.miguelemmara.me/wp-content/labs/lab05/style.css"&gt;

&lt;/head&gt;



&lt;body&gt;

    &lt;h1&gt;Retrieve And Display Records From The Table&lt;/h1&gt;

    &lt;h2&gt;Cars Display&lt;/h2&gt;



    &lt;table&gt;

        &lt;tr&gt;

            &lt;th&gt;Car ID&lt;/th&gt;

            &lt;th&gt;Make&lt;/th&gt;

            &lt;th&gt;Model&lt;/th&gt;

            &lt;th&gt;Price&lt;/th&gt;

        &lt;/tr&gt;

        &lt;?php

        require_once("settings.php");



        // complete your answer here //



        // Create connection

        $conn = new mysqli($host, $user, $pswd, $dbnm);



        // Check connection

        if ($conn-&gt;connect_error) {

            die("Connection Failed: " . $conn-&gt;connect_error);

        }

        // echo "Connected Successfully";

        echo "&lt;br&gt;";

        echo "&lt;br&gt;";



        $sql = "SELECT car_id, make, model, price FROM cars";

        $result = $conn-&gt;query($sql);



        if ($result-&gt;num_rows &gt; 0) {

            // output data of each row

            while ($row = $result-&gt;fetch_assoc()) {

                echo "&lt;tr&gt;&lt;td&gt;" . $row["car_id"] . "&lt;/td&gt;&lt;td&gt;"  . $row["make"] . "&lt;/td&gt;&lt;td&gt;"  . $row["model"] . "&lt;/td&gt;&lt;td&gt;"  . $row["price"] . "&lt;/td&gt;&lt;/tr&gt;";

            }

            echo "&lt;/table&gt;";

        } else {

            echo " 0 results";

        }

        $conn-&gt;close();



        ?&gt;

    &lt;/table&gt;



&lt;/body&gt;



&lt;/html&gt;
</pre>