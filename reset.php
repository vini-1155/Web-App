<?php 
     $servername = "localhost";
     $Sdbname = "shreenidhi";  
     $username = "root";
     $password = "";


     $fname = $_POST["fname"];
     $lname = $_POST["lname"];
     $uname = $_POST["uname"];
     $email = $_POST["email"];
    //  $phone = $_POST["phone"];
     $pass = $_POST["pass"];

   $conn = mysqli_connect($servername, $username, $password, $Sdbname);

     if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
     }
     if($sql = "select * from customers where username = '$uname' AND email='$email'"){
        $result = mysqli_query($conn, $sql);
     if($result-> num_rows>0){
         $sql = "Update customers set password = '$pass'";
         $result = mysqli_query($conn, $sql);
         echo "Password is successfully updated";
         include 'Login.html';
     }else{
      echo "Please Signup you haven't signed up yet!!";
      include 'signup.html';
     }
     }else{
      echo"Please Signup you haven't signed up yet!!";
      include 'signup.html';
     }
     
     

     if(mysqli_query($conn, $sql))
    {
    
     }
     else{
      echo "error".$sql."<br>".mysqli_error($conn);
     }


     mysqli_close($conn);



?>