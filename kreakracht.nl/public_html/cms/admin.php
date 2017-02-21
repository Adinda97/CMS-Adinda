<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="cms/css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		
		<div id="container">
			<div id="admin_Inlog">
				<img src="cms/img/cmslogo.png" alt="logo"/>
				<form method="post" action="">
                    <p>Emailadres<br>
                    <input type="text" name="email"/></p>
                    <p>Wachtwoord<br>
                    <input type="password" name="wachtwoord"/></p>	
					<p><i>Wachtwoord vergeten?</i></p>
                    <input type="submit" name="inlog" value="Inloggen" />
                </form>
					
					<?php 					
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
						
						$sql = mysqli_query($conn, "SELECT * FROM users WHERE userID = " . $_GET['uid'] . ";");
						
						if($sql === false)
						{
							echo "Fout met inloggen, neem contact op met de administrator";
						}
						else
						{
								
							while ($row = mysqli_fetch_array($sql))
							{
								if (($row['login'] == 1))
								{
									$_SESSION['LoggedIn'] = 1;
									$_SESSION['User'] = $row['naam'];
									echo "Succesvol ingelogd!";
									
									header("location: adminDashboard.php");
								}
								else
								{
									echo "Foute inloggegevens!";
								}
							}
						}
					
					
					?>
					
			</div> 
		
		</div>

	</body>
</html>



