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

    <div class="container">

        <h2>Add New Member Form</h2>

        <form class="form-horizontal" action="member_add.php" method="POST" target="_blank">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">First Name:</label>
                <div class="col-sm-10">
                    <input type="fname" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname" required>
                </div>
            </div>

            <br>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Last Name:</label>
                <div class="col-sm-10">
                    <input type="lname" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname" required>
                </div>
            </div>

            <br>

            <p>Select Your Gender Below</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genderButton" value="Male" id="gender1" required>
                <label class="form-check-label" for="gender1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genderButton" value="Female" id="gender2" required>
                <label class="form-check-label" for="gender2">
                    Female
                </label>
            </div>

            <br>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
            </div>

            <br>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Phone:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone" required>
                </div>
            </div>

            <br>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>