<?php
	session_start();
	$server = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$database = 'students';

try{
    $conn = new PDO("mysql:host=$server;dbname=myMDb_db", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    if(!mysql_connect($server, $db_username, $db_password)){
//        die('Could not connect to database!');
//    }
//    if(!mysql_select_db($database)){
//        die('Could not connect to the database');
//    }

}catch (PDOException $e){
//    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
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

</body>
</html>
