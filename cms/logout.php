<?php
session_start();

$host = "185.13.227.187";
$username = "adindqz158_user";
$password = "adindamedia";
$DBName = "adindqz158_users";

$conn = mysqli_connect($host, $username, $password);
//Check connection
if(!$conn)
{
	die("<p>Connection failed: " . mysqli_connect_error()) . "</p>";
}
else
{
	mysqli_select_db($conn, $DBName);
}
$sql = mysqli_query($conn, "UPDATE users SET login = '0' WHERE naam ='" . $_SESSION['User'] . "';");
		
if($sql === false)
{
	echo "Fout met uitloggen, neem contact op met de administrator";
}
else
{
	session_unset();
	session_destroy();
	header("location:../index.php");
	exit();
} 
?>