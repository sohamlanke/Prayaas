<?php

	$vid =  $_GET["vid"]; 

	require 'dbh.inc.php';

	// $sql = "DELETE FROM users WHERE emailUsers = '$email'";
	$sql = "Update volunteer SET checkbox = 'yes' WHERE vid=$vid";

	if ($conn->query($sql) === TRUE) {
  		// header("Location: ../admin-settings.php?DeleteSuccessful");
  		header("Refresh:0; url=../volunteer.php"); 
	} else {
  		echo "Error deleting record: " . $conn->error;
	}
	

 ?>