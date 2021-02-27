<?php

// require 'dbh.inc.php';
		$title = $_POST['title'];
		$desc1 = $_POST['desc1'];
// 		$desc2 = $_POST['desc2'];
		// $filename = $_FILES["uploadfile"]["name"]; 
		// $tempname = $_FILES["uploadfile"]["tmp_name"];
		// $cid = $_POST['cid'];
		// $name = $_GET[''];

			if (empty($title) || empty($desc1) ) {
				header("Location: ../addCamp.php?error=emptyfields");
				exit();
			}
			// elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// 	header("Location: ../addCamp.php?error=invalidmail");
			// 	exit();
			// }
			// elseif (!is_numeric($amt)) {
			// 	header("Location: ../aaddCamp.php?error=amtNotNumeric");
			// 	exit();
			// }
			else{

				// error_reporting(0); 


				require 'dbh.inc.php';

					 
				// $folder = "image/".$filename; 

				// if (move_uploaded_file($tempname, $folder)) { 
				// 		$msg = "Image uploaded successfully"; 
				// 	}else{ 
				// 		$msg = "Failed to upload image";
				// 		header("Location: ../addCamp.php?imageUploadFailed") ;
				// } 

				// $sql = "INSERT INTO campaigns (title, description1, description2, filename) VALUES ('$title', '$desc1', '$desc2', '$filename')";
				$sql = "INSERT INTO campaigns (title, description1) VALUES ('$title', '$desc1')";

				if ($conn->query($sql) === TRUE) {

					// echo $filename;

				  	header("Location: ../admin.php?campaign=successful");
				  	exit();
				} else {
				  	header("Location: ../addCamp.php?error=error");
				  	exit();
				}

				$conn->close();
			}
		