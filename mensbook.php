<?php

$servername = "localhost";
$dbname = "shreenidhi";
$username = "root";
$password = "";

$shirtc = $_POST["shirtc"];
$pantc = $_POST["pantc"];
$blazzerc = $_POST["blazzerc"];
$custc = $_POST["custc"];
$fshtc = $_POST["fshtc"];
$fpantc = $_POST["fpantc"];
$fcustc = $_POST["fcustc"];
$csrtc = $_POST["csrtc"];
$cptc = $_POST["cptc"];
$ccustc = $_POST["ccustc"];
$name = "Vnaehs";

$total_price = ($shirtc*600)+($pantc*700)+($blazzerc*1200)+($custc*2200)+($fshtc*600)+($fpantc*700)+($fcustc*1200)+($csrtc*600)+($cptc*700)+($ccustc*2500);

echo "Total price is ".$total_price;
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection Failed".$conn->mysqli_error);
}

$sql = "insert into menbookp values('.$name.','.$shirtc.','.$pantc.','.$blazzerc.','.$custc.','.$fshtc.','.$fpantc.','.$fcustc.','.$csrtc.','.$cptc.','.$ccustc.','.$total_price.')";

if(mysqli_query($conn, $sql)){
    include 'orderplaced.html';

}else{
     echo "error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);


?>