<?php
	session_start();
	$server = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$database = 'students';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database", $db_username, $db_password);
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
?>