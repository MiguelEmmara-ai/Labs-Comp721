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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./styles/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php
    session_start();
    $randomNumber = $_SESSION["random"];
    ?>

    <div class="container mt-3">
        <div class="container-fluid p-5 text-center col-sm-15">
            <h1 class="font-weight-bold display-1">Guessing Game</h1>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-5">
                    <?php echo "The hidden number was: $randomNumber <br>"; ?>
                </div>
            </div>
        </div>

        <div class="container mt-3 d-grid gap-2 d-md-block">
            <a class="btn btn-success btn-md" href="./startover.php" role="button">Start Over</a>
        </div>
    </div>

    <br>
    <br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>