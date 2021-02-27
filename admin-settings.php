<?php 

	require 'includes/checkLogin.php';

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Admin-Settings</title>
	<link rel="stylesheet" type="text/css" href="css/admin-settings.css">
</head>
<body>
	<div class="main-box">
		<h1 style="background-color: #2D98AF; color: white; border-top-right-radius:17px; border-top-left-radius: 17px; text-align: center; margin-bottom: 0px;">Admin Settings</h1>
		<h3 style="text-align: center; background-color: #E8AA14; margin-top: 0px;">List of Admins</h3>

		<div style=" height: 470px; overflow: auto;">
			<p style="margin-left: 15px;">
			<?php 
				require 'includes/dbh.inc.php';

				$sql = "SELECT * FROM users";

				if($result = mysqli_query($conn, $sql)){
    				if(mysqli_num_rows($result) > 0){
    					// echo '<table style = "color:white; text-align:center;">';
    					echo '<table style=" width: 96%; margin-left: 15px;">';
     
        				while($row = mysqli_fetch_array($result)){
			            	echo "<tr>";
			            	echo "<td>";
			                // echo "<td>" . $row['emailUsers'] . "</td>";
			            	// echo "</tr>";
			            	echo '<p style = " color: white; font-size: 20px;">';
			            	echo $row['emailUsers'].'</p>';
			            	echo "</td>";
			            	echo '<td style="color: white; text-align: center;">';
			            	echo '<form action="includes/deleteAdmin.php" method="post">
			            			<input type = "text" name="email" value="'.$row['emailUsers'].'" style="display:none">
									<input type="image" src="cross.png" name="delete-btn" value="'.$row['emailUsers'].'">
									</form>';
			            	echo "</td>";
			            	echo "</tr>";
        				}
        				echo "</table>";
        				// Free result set
        				mysqli_free_result($result);
        			}
    			} 
			 ?>
			</p>			
		</div>
		<div style="text-align: center; ">
			<form style="display: inline;" action="admin-signup.php"><button type="submit" id="new-admin-btn">Add New Admin</button></form><br>
		<a href="admin.php" >Back</a>
		</div>
		
	</div>
</body>
</html>

<?php  

	if (isset($_GET['email'])) {
			$email = $_GET['email'];
			echo '<script>alert("'.$email.' added as New Admin email")</script>';
		}	


?>

