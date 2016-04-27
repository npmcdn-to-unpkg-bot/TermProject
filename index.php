<?php
include 'DbConfig.php';
?>
<html lang="en">

<head>
    <title>UGA Wall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.upvote.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!--    TODO: maybe update the jquery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.upvote.js"></script>

    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/masonry.pkgd.js"></script>
    <script src="assets/js/app.js"></script>
</head>
<body>
<?php
include 'navbar.html';
?>

<div class="grid" id="mainContent">
    <div class="grid-item">
        <a href="images/corgi.jpg" alt="Corgi4Lyfe">
            <img src="images/corgi.jpg" alt="Corgi4Lyfe">
        </a>
        <div id="c1" class="upvote">
            <a class="upvote"></a>
            <span class="count">0</span>
            <a class="downvote"></a>
        </div>
    </div>
    <div class="grid-item">
        <a href="http://www.w3schools.com/" alt="w3">
            <div class="linkContainer">W3schools</div>
        </a>
        <div id="c2" class="upvote">
            <a class="upvote"></a>
            <span class="count">0</span>
            <a class="downvote"></a>
        </div>
    </div>
    <div class="grid-item">
        <a href="images/out-after-shuffle.png">
            <img src="images/out-after-shuffle.png" alt="">
        </a>
    </div>
    <div class="grid-item">
        <a href="images/out-after-shuffle.png">
            <img src="images/out-after-shuffle.png" alt="">
        </a>
    </div>
    <div class="grid-item">
        <a href="images/out-after-shuffle.png">
            <img src="images/out-after-shuffle.png" alt="">
        </a>
    </div>
    <div class="grid-item">
        <a href="images/out-after-shuffle.png">
            <img src="images/out-after-shuffle.png" alt="">
        </a>
    </div>
</div>

<?php
// close connection
$conn = null;
?>

<script>
    $('#c1').upvote();
    $('#c2').upvote();
</script>
</body>
</html>
