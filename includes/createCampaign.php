<?php

// require 'dbh.inc.php';
		$title = $_POST['title'];
		$desc1 = $_POST['desc1'];
		$desc2 = "tp";
		$filename = "notsetyet";
// 		$desc2 = $_POST['desc2'];
		// $filename = $_FILES["uploadfile"]["name"]; 
		// $tempname = $_FILES["uploadfile"]["tmp_name"];
		// $cid = $_POST['cid'];
		// $name = $_GET[''];

		if (isset($_FILES["fileToUpload"])) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$filename = $_FILES["fileToUpload"]["name"];
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			  if($check !== false) {
			    echo "File is an image - " . $check["mime"] . ".";
			    $uploadOk = 1;
			  } else {
			    echo "File is not an image.";
			    $uploadOk = 0;
			  }
			}
			if ($uploadOk == 0) {
			  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. FileName = ";
			    echo $_FILES["fileToUpload"]["name"];
			  } else {
			    echo "Sorry, there was an error uploading your file.";
			  }
		}
	}
				

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

					 
				// $folder = "uploads/".$filename; 

				// if (move_uploaded_file($tempname, $folder)) { 
				// 		$msg = "Image uploaded successfully"; 
				// 	}else{ 
				// 		$msg = "Failed to upload image";
				// 		header("Location: ../addCamp.php?imageUploadFailed") ;
				// } 

				// $sql = "INSERT INTO campaigns (title, description1, description2, filename) VALUES ('$title', '$desc1', '$desc2', '$filename')";
				$sql = "INSERT INTO campaigns (title, description1, description2, filename) VALUES ('$title', '$desc1','$desc2','$filename')";

				if ($conn->query($sql) === TRUE) {

					// echo $filename;

				  	header("Location: ../admin.php?campaign=successful");
				  	exit();
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				//   	header("Location: ../addCamp.php?error=error");
				//   	exit();
				}

				$conn->close();
			}
		