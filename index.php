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
<!--    <script src="assets/js/facebook-login.js"></script>-->

    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/masonry.pkgd.js"></script>
    <script src="assets/js/app.js"></script>
</head>
<body>
<?php
include 'navbar.html';
?>

<div style="text-align:center">
    <h2 style="color:white;text-decoration:underline">What&#39;s on your mind?</h2>
    <form method="post" action="post.php">
        <textarea name="message" rows="6" cols="100" style="resize:none;margin-bottom:5px"></textarea>
        <p><input type="submit" class="btn btn-primary" value="Post"><input type="reset" class="btn btn-success" style="margin-left:5px"></p>
    </form>
</div>
<div class="grid" id="mainContent">
    <?php
    // get all posts
        $host     = "localhost";
        $port     = 3306;
        $socket   = "";
        $dbname   = "uga_wall";
        $connectStatus = "";

        $conn = new mysqli($host, "root", "", $dbname, $port, $socket);

        if ($conn->connect_error)
        {
            header("Location: landingPage.html");
        }
    // select users.username, posts.message from users join posts on users.userID = posts.userID

    // Join users and posts tables to match username to message
    $stmtSelect = $conn->prepare("select users.username, posts.message from users join posts on users.userID = posts.userID order by postID DESC");
    $stmtSelect->execute();
    $stmtSelect->bind_result($username, $message);

    // counts how many rows have been counted to put into a <div class="row">
    $switchCounter = 0;
    $postId = 0;

    while ($stmtSelect->fetch())
    {
        echo '<div class="grid-item">
                <div style="font-size:24px">' . $message . '</div>
                <p style="font-size:20px"><i>By user - ' . $username . '</i></p>
                <div id="' .$postId . '" class="upvote">
                    <a class="upvote"></a>
                    <span class="count">0</span>
                    <a class="downvote"></a>
                </div>
              </div>';
        $postId++;
    }

    $stmtSelect->close();
    $conn->close();
    ?>
</div>

<?php
// close connection
$conn = null;
?>

<script>
    for(var i = 0; i < <?php echo $postId; ?>; i++){
        //Initializing the upvote counters
        $("#" + i).upvote();
        //get the counts of the upvotes for this post and initialize it
//        $("#" + i).upvote({
//            count: //todo: get the count
//        });
    }
</script>
</body>
</html>
