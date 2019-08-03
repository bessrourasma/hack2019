<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$user = $_GET['mail'] ;
$pass = $_GET['psw'] ;
SELECT $mail , $psw from user 
where 
($user = $mail) and ($pass=$psw) ; 

if ($user != $mail) or ($pass != $psw) 
echo("Error") ;
?>



