<?php


$servername = "localhost:3036";
$username = "root";
$password = "rootpassword";

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


$sql="INSERT INTO id SET $mail , $psw , $nf , $cin , $tel;";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql1="UPDATE id 
set $mail=$nmail" 
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$sql2="UPDATE id 
set $psw=$npsw" 
if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
$sql3="UPDATE id 
set $cin=$ncin" 
if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}$sql4="UPDATE id 
set $tel=$ntel" 
if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}


?>