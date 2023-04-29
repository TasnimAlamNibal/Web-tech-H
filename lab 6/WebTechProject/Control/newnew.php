<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306;



$con = mysqli_connect($servername, $username, $password, $DBS, $port);
 if(!$con)
 {
    die("Connection Failed : ".$con->connect_error);
   // header("Location:../View/Login.php");
 }
$sql = "INSERT INTO license (orderid) VALUES ('Order Confirmed')";
$stmt = $con->prepare($sql);
$result=$stmt->execute();
header("Location:../View/Order.php");
mysqli_close($con);
$stmt->close();



?>