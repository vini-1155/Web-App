<?php
$servername = "localhost";
$dbname = "shreenidhi";
$username = "root";
$password = "";


$shirtct = $_POST["shirtct"];
$pantct = $_POST["pantct"];
$srtnpantct = $_POST["srtnpantct"];
$shortct = $_POST["shortct"];
$frkct = $_POST["frkct"];
$name = "Vnaehs";

$total_price = ($shirtct*300)+($pantct*400)+($srtnpantct*600)+($frkct*300)+($shortct*200);

echo "Total price is ".$total_price."</br>";
$conn = mysqli_connect($servername, $username, $password, $dbname );

if($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "insert into kidsbookingp values('.$name.','.$shirtct.','.$pantct.','.$srtnpantct.','.$shortct.','.$frkct.','.$total_price.')";

if(mysqli_query($conn, $sql)){
    include 'orderplaced.html';

}else{
     echo "error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>