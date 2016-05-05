<?php
    $nameErr = $emailErr = $passErr = $cpassErr = "";

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
        if (empty($_POST["user_name"])) {
            $nameErr = "Name is required<br/>";
            $error = 1;
        } else {
            $user_name = test_input($_POST['user_name']);
            if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
              $nameErr = "Only letters and white space allowed<br/>";
              $error = 1;
            }
        }
        if (empty($_POST["user_email"])) {
            $emailErr = "Email is required<br/>";
            $error = 1;
        } else {
            $user_email = test_input($_POST['user_email']);
            if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format<br/>";
                $error = 1;
            }
        }
        if (empty($_POST["password"])) {
            $passErr = "Password is required<br/>";
            $error = 1;
        } else {
            $user_password = test_input($_POST['password']);
        }
        if (empty($_POST["cpassword"])) {
            $cpassErr = "Confirm Password is required<br/>";
            $error = 1;
        } else if(strcmp($_POST['password'],$_POST['cpassword']) !== 0) {
            $cpassErr = "Passwords don't match<br/>";
            $error = 1;
        } else {
            $user_cpassword = test_input($_POST['cpassword']);
        }
    }
    if($error != 1) {
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
                    try {
                        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
                        $stmt->execute(array(":email"=>$user_email));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        session_start();
                        $_SESSION['user'] = $user_name;
                        $_SESSION['id'] = $row['userID'];
                        header("Location: index.php");
                    }
                    catch(PDOException $e) {
                        echo $e->getMessage();
                    }
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
    }
    else {
        echo "<strong style=\"color:red\">Error! Invalid data. Please go back and try again.</strong><br/><br/>";
        echo $nameErr;
        echo $emailErr;
        echo $passErr;
        echo $cpassErr;
        echo "<br/><a href=\"register.php\">Go back to previous page</a>";
    }
    // close connection
    $conn = null;
?>