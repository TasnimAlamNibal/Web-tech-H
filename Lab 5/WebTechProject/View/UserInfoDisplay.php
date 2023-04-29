<?php
	session_start();
	require ('../Control/UserInfoDisplayAction.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br>
	<div class="id100">
	<?php
	$id = 1;
	while($row = mysqli_fetch_assoc($result)) {
        echo "<b>".$id. " -- First Name: " . $row["fname"]. " -- Last Name: " . $row["lname"]. " -- Gender: " . $row["gender"]. " -- Email/Phone No: " . $row["emailphn"]." -- NID NO: " . $row["nid"]. " -- User: " . $row["usertype"]."</b>"."<br><br>";
        $id++;
    }
    ?>
    <br> <br> <br>
    <div class="id17"><form method="POST" action="../Control/Deleteuser.php">
		<input type="text" id="search1" name="search1" placeholder="Enter email/phone to delete">
		<input type="submit" value = "Delete">
		<div class="id07">
		<?php
			if(isset($_SESSION['error71']))
			{
				echo "<b>".$_SESSION['error71']."</b></p>";
				unset($_SESSION['error71']);
			}
		?>
		</div>
	</form></div>
	<br> <br> <br>
		<div class="id02">
        <?php
            if($_SESSION['login']==1)
            {
                echo "<a href=\"http://localhost/WebTechProject/Users/Admin.php\">Back</a>";
            }
            elseif($_SESSION['login']==2)
            {
                echo "<a href=\"http://localhost/WebTechProject/Users/Driver.php\">Back</a>";
            }
            else
            {
                echo "<a href=\"http://localhost/WebTechProject/Users/General.php\">Back</a>";
            }
            
        ?>
        </div>
    	</div>

	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>