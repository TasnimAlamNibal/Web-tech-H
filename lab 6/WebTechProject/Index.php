<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<center>
<body style="background-image: linear-gradient(to right, #0E5CAD,#79F1A4);">
	<div><header style="position: fixed; left: 0; top: 0; width:100%"><?php include "Top/Top.html"?> </header></div>
	<br><br><br><br><br><br><br>
<button onclick="document.location='http://localhost/WebTechProject/View/Login.php'" style="background-color: skyblue; border-radius: 5px; text-align: center; width: 350px; border: none; font-size: 17px; padding: 10px; cursor: pointer;"><b>Admin</b></button>
	<br><br><br>
	<button onclick="document.location='http://localhost/WebTechProject/View/Login.php'" style="background-color: skyblue; border-radius: 5px; text-align: center; width: 300px; border: none; font-size: 17px; padding: 10px; cursor: pointer;"><b>Customer</b></button>
   <br><br><br>
  <button onclick="document.location='http://localhost/WebTechProject/View/Login.php'" style="background-color: skyblue; border-radius: 5px; text-align: center; width: 300px; border: none; font-size: 17px; padding: 10px; cursor: pointer;"><b>Architect</b></button>
	<div><footer style="position: fixed; left: 0; bottom: 0; width: 100%;" > <?php include "Bottom/End.html" ?> </footer></div>
</body>
</center>
</html>