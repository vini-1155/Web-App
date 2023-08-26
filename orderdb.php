<?php

$servername = "localhost";
$dbname = "shreenidhi";
$username = "root";
$password = "";


$pickadd = $_POST["pickadd"];
$deladd = $_POST["deladd"];
$num = $_POST["num"];
$pin = $_POST["pin"];
$fulladd = $_POST["fulladd"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection Failed".$conn->mysqli_error);
}

$sql = "Insert into orderdb  values('.$pickadd.','.$deladd.','.$num.','.$pin.','.$fulladd.')";


if(mysqli_query($conn, $sql)){
    echo "Your details has been saved";

}else{
     echo "error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>