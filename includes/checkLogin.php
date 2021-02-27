<?php 

	session_start();
	if (!isset($_SESSION['userEmail'])) {
		header("Location: admin-login.php");
		exit();
	}


 ?>
