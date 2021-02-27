<!DOCTYPE html>
<html>
<head>
	<title>Admin-Login</title>
	<link rel="stylesheet" type="text/css" href="css/admin-login.css">
</head>
<body>
	<div class="login-panel">
		<h2><a href="index.php" style="text-decoration: none; color: white;">Prayaas</a></h2>
		<h3>Login Page</h3>
		<div class="login-fields">
			<form action="includes/login.inc.php" method="POST">
				<input type="text" name="email" placeholder="Email" style="color: white" >
				<input type="password" name="password" placeholder="Password" style="color: white" >
				<button type="submit" name="login-submit" class="login-button">Login</button>
				<br>
				<p style="color: yellow; font-weight: bold;">
				<?php
					if(isset($_GET['error'])){
						if ($_GET['error'] == 'emptymail') {
							echo "Enter Email";
						}
						elseif ($_GET['error'] == 'emptypwd') {
							echo "Enter password";
						}
						elseif ($_GET['error']=='invalidmail') {
							echo "Enter valid email";
						}
						elseif ($_GET['error']=='incorrectCredentials') {
							echo "Incorrect Credentials";
						}
						elseif ($_GET['error']=='wrongpwd') {
							echo "Incorrect Password";
						}
					} 
				 ?>
				</p>
			</form>
			<!-- <input type="" name="" placeholder="Email">
			<input type="" name="" placeholder="Password">
			<button class="login-button" onclick="login()">Login</button>
			<a href="admin-signup.html">New user?</a> -->
		</div>


	</div>

</body>
</html>
<script>
	function login()
	{
		window.open("admin.html","_self");
	}
</script>