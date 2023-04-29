<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
$con = mysqli_connect($servername, $username, $password, $DBS, $port);
if(!$con)
{
	die("Connection Failed : ".$con->connect_error);
	exit('Could not Connect');
}

$stmt = $con->prepare("SELECT id, name FROM studentinfo WHERE id=?");
$stmt->bind_param("s",$_GET['q']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();
$id = $row["id"];
$name = $row["name"];

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "</tr>";
echo "</table>";
?>