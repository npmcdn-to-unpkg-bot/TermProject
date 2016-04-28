<?php
    session_start();
    	$server = 'localhost';
    	$db_username = 'root';
    	$db_password = '';
    	$database = 'uga_wall';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    function test_input($data)
    {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }
    if($_POST)
    {
        $user_name = test_input($_POST['user_name']);
        $user_email = test_input($_POST['user_email']);
        $user_password = test_input($_POST['password']);

        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->execute(array(":email"=>$user_email));
            $count = $stmt->rowCount();

            if($count==0)
            {
                $stmt = $conn->prepare("INSERT INTO users(username,password,email) VALUES(:uname, :pass, :email)");
                $stmt->bindParam(":uname",$user_name);
                $stmt->bindParam(":email",$user_email);
                $stmt->bindParam(":pass",$user_password);

                if($stmt->execute())
                {
                    echo "Registered Successfully";
                }
                else
                {
                    echo "Query could not execute";
                }
            }
            else
            {
                echo "Email already taken"; //  email not available
            }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        // close connection
        $conn = null;
    }
?>