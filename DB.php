<?php

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


$mail=$_POST['mail'];
$nf=$_POST['nf'];
$psw=$_POST['psw'];
$cin=$_POST['cin'];
$tel=$_POST['ph'];


$sql="INSERT INTO personnes SET $mail , $psw , $nf , $cin , $tel;";

?>