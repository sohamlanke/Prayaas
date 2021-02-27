<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="feedbackop.css">
	<title>FEEDBACKS</title>
</head>
<body background="fdbkformbg.jpg">
	<div class="main-box">
		<h1 style="background-color: #2D98AF; 
		color: white; 
		border-top-right-radius:17px; 
		border-top-left-radius: 17px; 
		text-align: center; 
		margin-bottom: 0px;">Feedbacks</h1>
		<h3 style="text-align: center; 
		background-color: #E8AA14; 
		margin-top: 0px;">List of Feedbacks</h3>
		<table style=" width:100%; margin-left: 15px; margin-bottom: -15px; margin-top: -20px">
		<tr>
			<th>
				<h4  style="color: #E8AA14; font-size: 16px; margin-left: -70px">FIRST NAME</h4>
			</th>
		
		
			<th>
				<h4 style="color: #E8AA14; font-size: 16px; margin-left: -80px">LAST NAME </h4>
			</th>
		
		
			<th>
				<h4 style="color: #E8AA14; font-size: 16px; margin-left: -25px ; margin-right: -50px">FEEDBACK</h4>
			</th>
			<th>
				<h4 style="color: #E8AA14; font-size: 16px; margin-left: 0px">EMAIL</h4>
			</th>
		</tr>
	</table>
	</table>
	</table>

		<?php
		
		$conn = mysqli_connect("localhost","root","","prayaas");

		if(!$conn)
		{
			die("Connection Failed:" .mysqli_connect_error());
		}

		$sql = "SELECT * from entry_details	";
		$result = $conn-> query($sql);

		if($result-> num_rows > 0)
		{
			echo '<table style=" width:90%; margin-left: 90px;">';
			while ($row = $result-> fetch_assoc()) {
					# code...
							echo "<tr>";
			            	echo "<td>";
			               	echo '<p style = "text-align:center; margin-left: -40px; color: white; font-size: 20px; margin-bottom: 5px; margin-top: -5px">';
			            	echo $row['first_name'].'</p>';
			            	echo "</td>";
			            	echo "<td>";
			            	echo '<p style = "text-align:center; margin-left: 50px; color: white; font-size: 20px; margin-bottom: 5px; margin-top: 5px">';
			            	echo $row['last_name'].'</p>';
			            	echo "</td>";
			            	echo "<td>";
			            	echo '<p style = "text-align:center; color: white; font-size: 20px; margin-left:25px; margin-bottom: 5px; margin-top: 5px">';
			            	echo $row['feedback'].'</p>';
			            	echo "</td>";
			            	echo "<td>";
			            	echo '<p style = "text-align:center; color: white; font-size: 20px; margin-bottom: 5px; margin-top: 5px">';
			            	echo $row['email'].'</p>';
			            	echo "</td>";
			                echo "</tr>";
        				}
        				echo "</table>";
        				// Free result set
        				mysqli_free_result($result);	
			}

		$conn-> close();
		?>
		</div>
</body>
</html>