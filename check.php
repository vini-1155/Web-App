<?php
$servername = "localhost";
$dbname = "shreenidhi";
$username ="root";
$password = "";

$uname = $_POST["uname"];
$pass = $_POST["pass"];
$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "select * from customers where username = '$uname' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
if($result-> num_rows>0){
  while($row = $result -> fetch_assoc()){
    $us = $row["username"];
  }
  echo "Signed Up Successfully!!".$us;
  include 'index.html';
}else{
    echo "Try Enterting valid username and password";
    include 'Login.html';
   
}
  


if(mysqli_query($conn, $sql))
  {
    
  }
  else{
    echo "error".$sql."<br>".mysqli_error($conn);
  }

  mysqli_close($conn);



?>