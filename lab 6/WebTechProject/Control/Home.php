<?php	
session_start();
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$DBS = "vms system";
$port = 3306; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if((empty($email)) and (empty($pass)))
	{
		$_SESSION['error1']="*Please enter email/phone";
		$_SESSION['error2']="*Please enter password";
		header("Location:../View/Login.php");
	}
	elseif((empty($email)))
	{
		$_SESSION['error1']="*Please enter email/phone";
		header("Location:../View/Login.php");
	}
	elseif((empty($pass)))
	{
		$_SESSION['error2']="*Please enter password";
		header("Location:../View/Login.php");
	}
	else
	{
		$con = mysqli_connect($servername, $username, $password, $DBS, $port);
		if(!$con)
		{
			die("Connection Failed : ".$con->connect_error);
			header("Location:../View/Login.php");
		}
		$stmt = $con->prepare("SELECT emailphn, fname, lname, password, usertype FROM uservms WHERE emailphn= ? and password=?");
		$stmt->bind_param("ss",$email,$pass);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if(mysqli_num_rows($result)== 1)
		{
			header("Location:../View/Home.php");
			/*$_SESSION['userid'] = $email;
			$_SESSION['first'] = $row["fname"];
			$_SESSION['last'] = $row["lname"];
			$type = $row["usertype"];
			$_SESSION['user01']=$type;
			if($type==="General User" or $type==="Owner")
			{
				$_SESSION['login'] = 3;
				header("Location:../Users/General.php");
			}
			elseif($type==="Driver")
			{
				$_SESSION['login'] = 2;
				header("Location:../Users/Driver.php");
			}
			else
			{
				$_SESSION['login'] = 1;
				header("Location:../Users/Admin.php");
			}*/
			
		}
		else
		{
			$_SESSION['error1']="*Please check email/phone";
			$_SESSION['error2']="*Please check password";
			header("Location:../View/Login.php");
		}
		mysqli_close($con);
		$stmt->close();
	}
}
else
{
	$_SESSION['error01']="Invail Request Method";
	header("Location:../View/Login.php");
}
?>
