<pre>&lt;!DOCTYPE html&gt;



&lt;html&gt;



&lt;head&gt;

    &lt;meta charset="utf-8"&gt;

    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;

    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;title&gt;Web Development AUT VIP&lt;/title&gt;

    &lt;link rel="stylesheet" type="text/css" href="https://webdev.miguelemmara.me/wp-content/labs/lab05/style.css"&gt;



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



        &lt;table&gt;

            &lt;tr&gt;

                &lt;th&gt;First Name&lt;/th&gt;

                &lt;th&gt;Last Name&lt;/th&gt;

                &lt;th&gt;Gender&lt;/th&gt;

                &lt;th&gt;Email&lt;/th&gt;

                &lt;th&gt;Phone&lt;/th&gt;

            &lt;/tr&gt;

            &lt;?php

            require_once "settings.php";



            // Create connection

            $conn = new mysqli($host, $user, $pswd, $dbnm);



            // Check connection

            if ($conn-&gt;connect_error) {

                die("Connection failed: " . $conn-&gt;connect_error);

            }



            $sql = "SELECT fname, lname, gender, email, phone FROM vipmembers";

            $result = $conn-&gt;query($sql);



            if ($result-&gt;num_rows &gt; 0) {

                // output data of each row

                while ($row = $result-&gt;fetch_assoc()) {

                    echo "&lt;tr&gt;&lt;td&gt;" . $row["fname"] . "&lt;/td&gt;&lt;td&gt;"  . $row["lname"] . "&lt;/td&gt;&lt;td&gt;"  . $row["gender"] . "&lt;/td&gt;&lt;td&gt;"  . $row["email"] . "&lt;/td&gt;&lt;td&gt;"  . $row["phone"] . "&lt;/td&gt;&lt;/tr&gt;";

                }

                echo "&lt;/table&gt;";

            } else {

                echo " 0 results";

            }

            $conn-&gt;close();



            ?&gt;

        &lt;/table&gt;

    &lt;/div&gt;



    &lt;!-- Option 1: Bootstrap Bundle with Popper --&gt;

    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"&gt;&lt;/script&gt;

    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"&gt;&lt;/script&gt;



&lt;/body&gt;



&lt;/html&gt;
</pre>