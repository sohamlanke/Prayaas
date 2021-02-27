<?php 
if ($_POST["email"]) {
	$email =  $_POST["email"]; 

	require 'dbh.inc.php';

	$sql = "DELETE FROM users WHERE emailUsers = '$email'";

	if ($conn->query($sql) === TRUE) {
  		header("Location: ../admin-settings.php?DeleteSuccessful");
	} else {
  		echo "Error deleting record: " . $conn->error;
	}
}
else{
	echo "No mail found";
}