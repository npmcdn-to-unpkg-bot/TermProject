<?php
/*
$redir = $_SERVER['DOCUMENT_ROOT'];
$redir_success = $redir . "/www/Protelog/Views/Account/profile.php";

// TODO, redir to self on error 
$redir_fail = $redir . "/www/Protelog/Views/Account/login.php";
*/

$email = $emailErr = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$emailErr = "Invalid email";
	}
	$password = test_input($_POST["password"]);
}

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Query MySQL DB
$host     = "localhost";
$port     = 3306;
$socket   = "";
$dbname   = "uga_wall";
$connectStatus = "";

$conn = new mysqli($host, "root", "", $dbname, $port, $socket);

if ($conn->connect_error) 
{
	//echo "conn error";
	//header("Location: /www/Protelog/Views/Account/error.php");
} 

// Query db
$stmtSelect = $conn->prepare("SELECT userID, username, password, email FROM users");
$stmtSelect->execute();
$result = $stmtSelect->get_result();

$email_db = "";
$psswrd_db = "";

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		$email_db = $row["email"];
		$psswrd_db = $row["password"];
		
		echo $email_db;
		echo $psswrd_db;
		
		if($email_db == $email && $psswrd_db == $password)
		{
			session_start();
			
			// store the username and user id in the session
			$_SESSION['user'] = $row['username'];
			$_SESSION['id'] = $row['userID'];
			
			// success, redirect to home page
			
			header("Location: index.php");
			exit();
		}
		else if($email_db == $email && $psswrd_db != $password)
		{
			// wrong password, redirect to failure 
			
			//header("Location: login_failure.php"); 
			exit();
		}
		else if($email_db == "" || $email_db == null)
		{
			// email doesn't exist in the database
			
			exit();
		}
    }
} 
else 
{
    echo "0 results";
}

$stmtSelect->close();
$conn->close();
?>
