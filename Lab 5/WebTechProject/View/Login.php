<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VMS Log In </title>
	<link rel="stylesheet" href="../Design/design.css">
</head>
<body>
	<div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
	<div class="id100"><div class = "squareshape01">
		<table>
			<tr>
				<td></td>
				<td> 
					<center>
					<fieldset>
							<legend><b>Login :</b></legend>
								<form method="POST" action="http://localhost/WebTechProject/Control/Home.php">
									<table>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="text" id="email" name="email" placeholder="Enter email or phone no   " >
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error1']))
													{
														echo "<b>".$_SESSION['error1']."</b>";
														 unset($_SESSION['error1']);
													}
												?>
											</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<input type="Password" id="pass" name="pass" placeholder="Enter password  ">
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<div class="id07">
												<?php 
													if(isset($_SESSION['error2']))
													{
														echo "<b>".$_SESSION['error2']."</b>";
														unset($_SESSION['error2']);
														session_destroy(); 
													}
												?>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td><a href="http://localhost/WebTechProject/View/Profilesearch.php" target="_blank"><div class="id04"><b>Forget Password</b></a>&nbsp&nbsp&nbsp<input type="submit" value="Login"></div></td>
										</tr>
									</table>
								</form>
						</fieldset>
					</center>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><center><b>Don't have an account?</b><a href="http://localhost/WebTechProject/View/Registration.php"><div class="id04"><b> Register here.</b></a></div></center></td>
			</tr>
		</table>
	</div>
    </div>
	</center>
	<div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
	<script src="../JavaJS/LoginPage.js"></script>
</body>
</html>