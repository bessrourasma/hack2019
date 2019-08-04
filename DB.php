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

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$user = $_GET['mail'] ;
$pass = $_GET['psw'] ;
$phone = $_GET['ph'] ;
$cin = $_GET['cin'] ;
$np = $_GET['nf'] ;
$sql = "CREATE TABLE user (
    $np varchar(50) PRIMARY KEY,
    $pass VARCHAR(30) NOT NULL,
    $user VARCHAR(30) NOT NULL,
     $cin int(8),
     $phone int(8)
    )"

if ($conn->query($sql) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn1 = new mysqli($servername, $username, $password);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
echo "Connected successfully";
if ($user != $mail) or ($pass != $psw) 
echo("Error") ;
else
echo("Connected")


?>












