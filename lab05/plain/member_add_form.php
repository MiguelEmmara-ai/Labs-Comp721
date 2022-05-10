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



    &lt;div class="container"&gt;



        &lt;h2&gt;Add New Member Form&lt;/h2&gt;



        &lt;form class="form-horizontal" action="member_add.php" method="POST" target="_blank"&gt;

            &lt;div class="form-group"&gt;

                &lt;label class="control-label col-sm-2" for="email"&gt;First Name:&lt;/label&gt;

                &lt;div class="col-sm-10"&gt;

                    &lt;input type="fname" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname" required&gt;

                &lt;/div&gt;

            &lt;/div&gt;



            &lt;br&gt;



            &lt;div class="form-group"&gt;

                &lt;label class="control-label col-sm-2" for="email"&gt;Last Name:&lt;/label&gt;

                &lt;div class="col-sm-10"&gt;

                    &lt;input type="lname" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname" required&gt;

                &lt;/div&gt;

            &lt;/div&gt;



            &lt;br&gt;



            &lt;p&gt;Select Your Gender Below&lt;/p&gt;

            &lt;div class="form-check"&gt;

                &lt;input class="form-check-input" type="radio" name="genderButton" value="Male" id="gender1" required&gt;

                &lt;label class="form-check-label" for="gender1"&gt;

                    Male

                &lt;/label&gt;

            &lt;/div&gt;

            &lt;div class="form-check"&gt;

                &lt;input class="form-check-input" type="radio" name="genderButton" value="Female" id="gender2" required&gt;

                &lt;label class="form-check-label" for="gender2"&gt;

                    Female

                &lt;/label&gt;

            &lt;/div&gt;



            &lt;br&gt;



            &lt;div class="form-group"&gt;

                &lt;label class="control-label col-sm-2" for="email"&gt;Email:&lt;/label&gt;

                &lt;div class="col-sm-10"&gt;

                    &lt;input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required&gt;

                &lt;/div&gt;

            &lt;/div&gt;



            &lt;br&gt;



            &lt;div class="form-group"&gt;

                &lt;label class="control-label col-sm-2" for="email"&gt;Phone:&lt;/label&gt;

                &lt;div class="col-sm-10"&gt;

                    &lt;input type="number" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone" required&gt;

                &lt;/div&gt;

            &lt;/div&gt;



            &lt;br&gt;



            &lt;div class="form-group"&gt;

                &lt;div class="col-sm-offset-2 col-sm-10"&gt;

                    &lt;button type="submit" class="btn btn-info btn-lg"&gt;Submit&lt;/button&gt;

                &lt;/div&gt;

            &lt;/div&gt;

        &lt;/form&gt;

    &lt;/div&gt;



    &lt;!-- Option 1: Bootstrap Bundle with Popper --&gt;

    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"&gt;&lt;/script&gt;

    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"&gt;&lt;/script&gt;



&lt;/body&gt;



&lt;/html&gt;
</pre>