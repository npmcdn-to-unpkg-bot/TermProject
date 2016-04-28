<?php
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
    // Start the session
    session_start();
    $userID = "4"; //todo: make the userID relevant to the session
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	// get the message text from a textarea id'd as message
    	$message = $_POST["message"];

    	// TODO: test text input?
    }
    // Query db
    $stmtInsert = $conn->prepare("insert into posts (message, userID) values (?, ?)");
    $stmtInsert->bind_param("ss", $message, $userID);

    // TODO: error check?
    $stmtInsert->execute();

    header("Location: index.php");
?>