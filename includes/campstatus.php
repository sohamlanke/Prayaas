<?php 
	
	if ($_GET["title"] && $_GET["status"]) {
	$title =  $_GET["title"]; 
	$status = $_GET["status"];

	$flag = 2;

	require 'dbh.inc.php';

	if ($status == "Deactive") {
		$sql = "UPDATE campaigns SET status = 'Active' WHERE title= '$title' ";
		$flag = 1;
	}
	else{
		$sql = "UPDATE campaigns SET status = 'Deactive' WHERE title= '$title' ";
		$flag = 0;
	}

	
	if ($conn->query($sql) === TRUE) {
  		header("Location: ../admin.php?status=$flag&selectedRow=$title");
	} else {
  		echo "Error updating record: " . $conn->error;
	}
}
else{
	echo "No title found from GET method";
}


 ?>