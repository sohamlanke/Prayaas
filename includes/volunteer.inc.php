<?php 

	require 'dbh.inc.php';

	if (isset($_POST['volunteer-btn'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$location = $_POST['location'];
		$checkbox = "no";
		// $name = $_GET[''];


			if (empty($email) || empty($name) || empty($age) || empty($location)) {
				header("Location: ../form.php?error=emptyfields");
				exit();
			}
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../form.php?error=invalidmail");
				exit();
			}
			elseif (!is_numeric($age)) {
				header("Location: ../form.php?error=amtNotNumeric");
				exit();
			}
			else{
				require 'dbh.inc.php';
				$sql = "INSERT INTO volunteer (name, email, age, location, checkbox) VALUES ('$name', '$email', $age, '$location', '$checkbox')";

				if ($conn->query($sql) === TRUE) {
				  	header("Location: ../index.php?volunteer=successful");
				  	exit();
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  	// header("Location: ../don2.php?error=volunteerError");
				  	// exit();
				}

				$conn->close();
			}
		

	}
	else{
		header("Location: ../don2.php");
		exit();
	}