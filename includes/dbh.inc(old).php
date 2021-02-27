<?php 
$servername = "localhost";
$dBUsername = "id15546667_arjun";
$dBPassword = "Mnig3t!!!123";
$dBName = "id15546667_prayaas";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {	
	die("Connection failed: ".mysqli_connect_error());
}