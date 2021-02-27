<?php 

	require 'dbh.inc.php';

	if (isset($_POST['donation-btn'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$amt = $_POST['amount'];
		$cid = $_POST['cid'];
		// $name = $_GET[''];
		$isSubscription = "no";
		if (isset($_POST['isSubscription'])) {
			$isSubscription = "yes";
		}

			if (empty($email) || empty($name) || empty($amt) || empty($cid)) {
				header("Location: ../don2.php?error=emptyfields");
				exit();
			}
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../don2.php?error=invalidmail");
				exit();
			}
			elseif (!is_numeric($amt)) {
				header("Location: ../don2.php?error=amtNotNumeric");
				exit();
			}
			else{
				require 'dbh.inc.php';
				$sql = "INSERT INTO donations (cid, name, amount, email) VALUES ($cid,'$name', '$amt', '$email')";

				if ($conn->query($sql) === TRUE) {
				  	header("Location: ../index.php?donation=successful");
				  	exit();
				} else {
				  	header("Location: ../don2.php?error=transactionerror");
				  	exit();
				}

				$conn->close();
			}
		

	}
	else{
		header("Location: ../don2.php");
		exit();
	}