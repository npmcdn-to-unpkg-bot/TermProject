<?php
    include 'DbConfig.php';
    if($_POST)
    {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['password'];

        try {
            $stmt = $conn->prepare("SELECT * FROM ugawall_users WHERE email=:email");
            $stmt->execute(array(":email"=>$user_email));
            $count = $stmt->rowCount();

            if($count==0)
            {
                $stmt = $conn->prepare("INSERT INTO ugawall_users(username,password,email) VALUES(:uname, :pass, :email)");
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
    }
?>