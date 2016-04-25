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
    <title>UGA Wall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!--    TODO: maybe update the jquery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'navbar.html';
?>

<div class="main" id="wrapper">
    <div class="container" id="columns">
<!--        <div class="row-fluid">-->
            <div class="pin" style="background-color:lightblue">
                <!--This is just a placeholder to see how images may look-->
                <a href="images/corgi.jpg">
                    <img src="images/corgi.jpg" alt="Corgi4Lyfe">
                </a>
            </div>
            <div class="pin" style="background-color:red">
                <!--placeholder to see how linking to an article may look-->
                <a href="http://www.w3schools.com/" alt="w3">
                    <div class="linkContainer">W3schools</div>
                </a>
            </div>
            <div class="pin" style="background-color:yellow">
                col-lg-4
            </div>
            <div class="pin" style="background-color:red">
                <!--placeholder to see how linking to an article may look-->
                <a href="http://www.w3schools.com/" alt="w3">
                    <div class="linkContainer">W3schools</div>
                </a>
            </div>
            <div class="pin" style="background-color:lightblue">
                <!--This is just a placeholder to see how images may look-->
                <a href="images/corgi.jpg">
                    <img src="images/corgi.jpg" alt="Corgi4Lyfe">
                </a>
            </div>
            <div class="pin" style="background-color:red">
                <!--placeholder to see how linking to an article may look-->
                <a href="http://www.w3schools.com/" alt="w3">
                    <div class="linkContainer">W3schools</div>
                </a>
            </div>
        </div>
<!--    </div>-->
</div>


<?php
// close connection
$conn = null;
?>
</body>
</html>
