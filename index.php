<?php
    include 'DbConfig.php';
?>
<html lang="en">
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--	<title>UGA Wall</title>-->
<!--    <script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>-->
<!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
<!--</head>-->
<!--<body>-->

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--    TODO: maybe update the jquery library-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'navbar.html';
        ?>
        <div class="container">
          <h2>Welcome to UGA Wall</h2>
          <form role="form">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="submit" class="btn btn-default">Register</button>
          </form>
        </div>
        <?php
        // close connection
        conn = null;
        ?>
    </body>
</html>
