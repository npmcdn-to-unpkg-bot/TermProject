<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
      <title>Registration</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/app.css">
    <!--    TODO: maybe update the jquery library-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    </head>
    <body>
        <?php
            include 'navbar.php';
        ?>
        <div class="container">
            <form class="form-signin" action="register-submit.php" method="post" id="register-form" role="form">
                <h2 class="form-signin-heading">Registration</h2>
                <p><span class="error">* required field.</span></p>
                    <div class="form-group">
                    <label for="username">* Username:</label>
                        <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
                    </div>

                    <div class="form-group">
                    <label for="email">* Email:</label>
                        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                    </div>

                    <div class="form-group">
                    <label for="pwd">* Password:</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                    </div>

                    <div class="form-group">
                    <label for="pwd">* Confirm Password:</label>
                        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                    </button>
                </div>
            </form>
        </div>
        <?php
        // close connection
        $conn = null;
        ?>
    </body>
</html>
