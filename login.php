<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password 
      
      $myusername = mysqli_real_escape_string($db,$_GET['username']);
      $mypassword = mysqli_real_escape_string($db,$_GET['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$mail' and passcode = '$psw'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // if result matched $mail and $psw, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $mail;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>