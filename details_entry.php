<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="prayaas";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());
}


if(isset($_POST['save']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$feedback=$_POST['feedback'];

	$sql_query = "INSERT INTO entry_details(first_name,last_name,email,feedback)
	VALUES ('$first_name','$last_name','$email','$feedback')";

	if(mysqli_query($conn,$sql_query))
	{
		echo "New Details Entry Inserted Succesffully!";

	}
	else
	{
		echo "Error: " .$sql  . "" .mysqli_error($conn);

	}
	mysqli_close($conn);
	header("Location: index.php");

}
?>