<?php 

	require 'includes/checkLogin.php';

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/javascript" href="javascript/admin.js">
	<style type="text/css">
		
		#newAdmin{
			color: white;
			background-color: transparent;
			border: transparent;
			font-size: 17px;
			width: 150px;
			height: 40px;
			position: absolute;
			border-radius: 2px;
			margin-top: 9px;
			right: 144px;
			font-weight: bold;
		}
		#newAdmin:hover{
			background-color: #E8AA14;
		}
	</style>
</head>
<body>
	<header>
		<div class = "menubar">
			<ul>
				<li><a href="#" class="active">Analytics</a></li>
				<li><a href="volunteer.php">Volunteer</a></li>
				<li><a href="feedbackop.php">Feedbacks</a></li>
				<!-- <li><a href="#">Campaign</a></li>
				<li><a href="#">Funds</a></li> -->
			</ul>
			<form style="display: inline;" action="includes/logout.inc.php" method="post">
				<button type="submit" id = "logout"  >Logout</button>
			</form>
			<form style="display: inline;" action="admin-settings.php" method="post">
				<button type="submit" id="newAdmin">Admin Settings</button>
			</form>
		</div>
	</header>
	<div class = "info">
		<div class = "box-1">
			<h2><p>Campaigns Held</p></h2>
			<ul class="box-heading">
				<li>Name</li>
				<li>Amount Collected</li>
				<li>Status</li>
			</ul>
			<section class="data">
				<section style="overflow: auto; padding-top: 5px; height: 448px; width: 213%; overflow: auto;">
					<table style="width:100%; text-align: center; border-collapse: collapse;">
						<?php
							require 'includes/dbh.inc.php';

							
							$sql = "SELECT campaigns.title, campaigns.status, SUM(donations.amount) AS amount FROM campaigns left join donations ON campaigns.cid = donations.cid GROUP BY campaigns.title;";

							if($result = mysqli_query($conn, $sql)){
								if(mysqli_num_rows($result) > 0){
									$selectedRow = "";
									

									while($row = mysqli_fetch_array($result)){
										if (isset($_GET['selectedRow'])) {
											$selectedRow = $_GET['selectedRow'];
										}
										elseif ($selectedRow == "") {
											$selectedRow = $row['title'] ;
										}
										echo '<tr onclick = "window.location='."'admin.php?selectedRow=".$row['title']."'; ".'"';
										if ($row['title'] == $selectedRow) {
											echo 'style = "background-color:orange;"';  // ----- Selected Color here -----  
										}
										echo '>';
										echo '<td style=" width: 35%; color: white; font-size:18px; padding: 3px;">'.$row['title'].'</td>';
										if (is_null($row['amount'])) {
											$row['amount'] = 0;
										}
										echo '<td style=" width: 33%; color: white; font-size:18px; padding: 3px;">₹ '.$row['amount'].'</td>';
										echo '<td style="width:30%; ';

										if ($row['status'] == "Active" && $row['title'] != $selectedRow) {
											echo "color:#32CD32";
										}
										elseif ($row['title'] != $selectedRow) {
											echo "color:#FF0000";
										}

										echo '  
										; font-weight:bold;"><a href="includes/campstatus.php?title='.$row['title'].'&status='.$row['status'].'" style="text-decoration:inherit; color:inherit;;">'.$row['status'].'</a></td>';
										echo "</tr>";
									}
								}
							}

						 ?>
					<!-- <td style=" width: 50%; color: white;">PM Care Fund</td> -->
					<!-- <td style="width: 200%; color: white;">300000</td> -->
					</table>
				</section>
				

			</section>	
			<section class="box-1-bottom">
				<button><a href="addCamp.php">Create new Campaign</a></button>
			</section>
			
		</div>

		<div class="box-2">
			<h2><p>List of Contributors</p></h2>
				<ul class="box-heading">
				<li>Name</li>
				<li>Amount</li>
				<li>Email</li>
				<!-- <li>Location</li>
				<li>Donated</li> -->
				<!-- <li>Fund name</li> -->
			</ul>
			<section style="overflow: auto; padding-top: 5px; height: 454px; width: 100%; overflow: auto;">
					<table style="width:100%; text-align: center;">
						<?php
							require 'includes/dbh.inc.php';

							// echo $selectedRow;

							$sql = "SELECT * FROM donations WHERE cid = (select cid from campaigns WHERE title ='$selectedRow');";

							if($result = mysqli_query($conn, $sql)){
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_array($result)){
										echo "<tr>";
										echo '<td style="width:30%; color: white; font-size:18px; padding: 3px;">'.$row['name'].'</td>';
										if (is_null($row['amount'])) {
											$row['amount'] = 0;
										}
									echo '<td style="width:30%; color: white; font-size:18px; padding: 3px;">₹ '.$row['amount'].'</td>';
									echo '<td style="width:30%; color: white; font-size:18px; padding: 3px;">'.$row['email'].'</td>';
								
									}
								}
							}

						 ?>
					</table>
				</section>
			
		</div>
<!-- 		<div id="3div" >
			<h2><p>Campaigns Held</p></h2>
			<ul>
				<li>Name</li>
				<li>Amount Req.</li>
				<li>Amount Collected</li>
			</ul>
		</div> -->
	</div>
</body>
</html>
<script>
	function logout()
	{
		window.open('Admin-login.html','_self');;
	}
</script>