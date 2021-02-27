<?php 

	require 'includes/checkLogin.php';

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Admin-Signup</title>
	<link rel="stylesheet" type="text/css" href="css/admin-signup.css">
</head>
<body>
	<div class="login-panel">
		<h2>Prayaas</h2>
		<h3>New Admin Signup</h3>
		<form class="login-fields" action="includes/signup.inc.php" method="post">
			<input type="" name="email" placeholder="Email" style="color: white">
			<input type="password" name="password" placeholder="Password" style="color: white">
			<input id = "retype-password" type="password" name="password-repeat" placeholder="Retype Password" style="color: white"><br>
			<button type="submit" class="signup-button" name="signup-submit" style="margin-bottom: 3px;" class="signup-button" onclick="login()">Signup</button>
			<br>
			<a href="admin-settings.php" style="color: white; font-size: 13px;">Back</a>
			<p style="color: yellow; font-weight: bold">
				<?php
					if (isset($_GET['error'])) {
					 	if ($_GET['error'] == "emptyfields") {
					 		echo "Empty Fields";
					 	}
					 	elseif ($_GET['error'] == "invalidmail") {
					 		echo "Invalid Email";
					 	}
					 	elseif ($_GET['error'] == "passwordcheck") {
					 		echo "Re-enter Password";
					 	}
					 	elseif ($_GET['error'] == "mailtaken") {
					 		echo "Email already exists";
					 	}
					 	elseif ($_GET['error'] == "sqlerror") {
					 		echo "Unexpected Error";
					 	}
					 } 
				 ?>

			</p>
			
		</form>
	</div>

</body>
</html>
<script>
	function login()
	{
		window.open("admin.html","_self");
	}
</script>