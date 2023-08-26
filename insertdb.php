<?php
  $servername = "localhost";
  $Sdbname = "shreenidhi";  
  $username = "root";
  $password = "";

    $Fname = $_POST["fname"];
    $Lname = $_POST["lname"];
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $phoneno = $_POST["phone"];
    global $chance;
    $chance = 3;

    $conn = mysqli_connect( $servername, $username, $password, $Sdbname);

   $sql = "INSERT INTO customers VALUES('$Fname','$Lname','$uname','$email','$pass','$phoneno')";

  if(mysqli_query($conn, $sql))
  {
    echo "Signed Up Successfully!!";
  }
  else{
    echo "error".$sql."<br>".mysqli_error($conn);
  }
  mysqli_close($conn);
   include 'Login.html';
  
  ?> 
