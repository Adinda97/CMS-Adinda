<?php 
$host = "185.13.227.187";
$username = "adindqz158_CMS04";
$password = "admin";
$DBName = "adindqz158_CMS04";

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
?>