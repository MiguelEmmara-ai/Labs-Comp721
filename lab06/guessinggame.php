<!--Author: Muhamad Miguel Emmara-->
<!--Student ID: 18022146-->
<!--Email: ryf2144@autuni.ac.nz-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 06 - Guessing Game</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        h1 {
            color: green;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["random"])) {
        $_SESSION["random"] = rand(1, 100);
    }

    if (!isset($_SESSION["numberOfGuesses"])) {
        $_SESSION["numberOfGuesses"] = 1;
    }

    $randomNumber = $_SESSION["random"];
    $numberOfGuesses = $_SESSION["numberOfGuesses"];
    ?>

    <div class="container mt-3">
        <div class="container-fluid p-5 text-center col-sm-15">
            <h1 class="font-weight-bold display-1">Guessing Game</h1>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-5">
                    <p>Enter a number between 1 and 100, <br>Then press the Guess button.</p>
                </div>
            </div>

            <form class="row gx-3 gy-2" method="POST" action="<?php echo htmlspecialchars(
                                                                    $_SERVER["PHP_SELF"]
                                                                ); ?>">
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="numberInput" name="userInput" placeholder="Try Your Luck!" min="1" max="100" required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Guess</button>
                </div>
            </form>

            <?php if (empty($_POST["userInput"])) {
                $var = 0;
                $numberOfGuesses = 0;
            } else {
                $var = $_POST["userInput"];
                $_SESSION["numberOfGuesses"]++;

                if ($var == $randomNumber) {
                    echo '<script src="confetti.js"></script>';
                    echo '<script type="text/JavaScript">
// for starting the confetti 

const start = () => {
    setTimeout(function() {
        confetti.start()
    }, 500); // 500 is time that after 1 second start the confetti ( 1000 = 1 sec)
};

//  for stopping the confetti 

const stop = () => {
    setTimeout(function() {
        confetti.stop()
    }, 3500); // 3500 is time that after 5 second stop the confetti ( 5000 = 5 sec)
};
// after this here we are calling both the function so it works
start();
stop();
     </script>';
                    echo "<div style='color: green;'> Congratulation! You guessed the hidden number.<br></div>";
                } elseif ($var < $randomNumber) {
                    echo "Your guess is too low<br>";
                } else {
                    echo "Your guess is too high<br>";
                }
            } ?>

            <div class="row">
                <div class="col-sm-5 mt-3">
                    <?php echo "Number Of Guesses: $numberOfGuesses <br>"; ?>
                    <?php echo "$randomNumber"; ?>
                </div>
            </div>
        </div>

        <div class="container mt-3 d-grid gap-2 d-md-block">
            <a class="btn btn-success btn-md" href="./startover.php" role="button">Start Over</a>
            <a class="btn btn-danger btn-md" href="./giveup.php" role="button">Give Up</a>
        </div>
    </div>

    <br>
    <br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </script>

</body>

</html>