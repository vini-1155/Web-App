<?php

$servername = "localhost";
$dbname = "shreenidhi";
$username = "root";
$password = "";

$blousec = $_POST["blousec"];
$blinec = $_POST["blinec"];
$bdsgnc = $_POST["bdsgnc"];
$bgrandc = $_POST["bgrandc"];
$bemc = $_POST["bemc"];
$sareec = $_POST["sareec"];
$spikoc = $_POST["spikoc"];
$semngc = $_POST["semngc"];
$sironc = $_POST["sironc"];
$semc = $_POST["semc"];
$chudc = $_POST["chudc"];
$clngc = $_POST["clngc"];
$cdsnc = $_POST["cdsnc"];
$cgrdc = $_POST["cgrdc"];
$cemc = $_POST["cemc"];
$name = "Vnaehs";

$total_price = ($blousec*400)+($blinec*200)+($bdsgnc*400)+($bgrandc*600)+($bemc*1000)+($sareec*100)+($spikoc*1)+($sironc*300)+($semngc*200)+($semc*600)+($chudc*500)+($clngc*200)+($cdsnc*400)+($cgrdc*600)+($cemc*900);
echo "Total price is ".$total_price."</br>";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection Failed".$conn->mysqli_error);
}

$sql = "insert into womenbookp values('.$name.','.$blousec.','.$blinec.','.$bdsgnc.','.$bgrandc.','.$bemc.','.$sareec.','.$spikoc.','.$sironc.','.$semngc.','.$semc.','.$chudc.','.$clngc.','.$cdsnc.','.$cgrdc.','.$cemc.','.$total_price.')";

if(mysqli_query($conn, $sql)){
    include 'orderplaced.html';

}else{
     echo "error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);


?>