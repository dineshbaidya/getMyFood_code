<?php
// Database configuration with mySql

$server_login = "localhost";
$username_login = "root";
$password_login = ""; 
$database_login = "login";
    
    $conn = new mysqli($server_login, $username_login, $password_login,$database_login);
    if(!$conn){
        die ('Connection Failed Due To '. mysqli_connect_error());
    } 
    // else{
    //     echo "Connection Successfull";
    // }
?>