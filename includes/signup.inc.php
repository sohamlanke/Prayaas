<?php 
if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordRepeat = $_POST['password-repeat'];


	if (empty($email) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../admin-signup.php?error=emptyfields&email=".$email);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../admin-signup.php?error=invalidmail");
		exit();
	}
	elseif (!($password == $passwordRepeat)) {
		header("Location: ../admin-signup.php?error=passwordcheck");
		exit();
	}
	else{
		$sql = "SELECT emailUsers FROM users WHERE emailUsers=? ";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../admin-signup.php?error=sqlerror");
		exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {

				header("Location: ../admin-signup.php?error=mailtaken");
				exit();
			}
			else{
				$sql = "INSERT INTO users(emailUsers, pwdUsers) VALUES (?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../admin-signup.php?error=sqlerror");
					exit();
				}
				else{
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
					mysqli_stmt_execute($stmt);

					header("Location: ../admin-settings.php?email=".$email);
					exit();
				}
			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else{
	header("Location: ../admin-signup.php");
	exit();
}