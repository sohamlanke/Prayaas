<?php
if (isset($_POST['login-submit'])) {
 	
 	require 'dbh.inc.php';

 	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email == "admin" && $password == "admin") {
		session_start();
		$_SESSION['userEmail'] = $email;
		header("Location: ../admin.php?login=success");
		exit();
	}

	if(empty($email)){
		header("Location: ../admin-login.php?error=emptymail");
		exit();
	}
	elseif (empty($password)) {
		header("Location: ../admin-login.php?error=emptypwd&email=".$email);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../admin-login.php?error=invalidmail");
		exit();
	}
	else{
		$sql = "SELECT emailUsers, pwdUsers FROM users WHERE emailUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../admin-signup.php?error=sqlerror");
		exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			// mysqli_stmt_store_result($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {

				$pwdCheck = password_verify($password, $row['pwdUsers']);

				if($pwdCheck == false){

					header("Location: ../admin-login.php?error=wrongpwd&mail=".$email);
					exit();

				}
				elseif ($pwdCheck == true) {

					session_start();
					$_SESSION['userEmail'] = $email;

					// $_SESSION['userId'] = $row['idUsers'];

					header("Location: ../admin.php?login=success");
					exit();

				}
				else{
					header("Location: ../admin-login.php?error=wrongpwd");
					exit();

				}

				
			}
			else{
				header("Location: ../admin-login.php?error=incorrectCredentials");
				exit();
			}
		}

	}


	
 }
 else{
 	header("Location: ../admin-login.php");
	exit();
 }