<?php session_start(); 
if ($_SESSION == NULL) {
    $_SESSION['LoggedIn'] = "";
    $_SESSION['email'] = "";
    $_SESSION['gebruikerID'] = "";
}

if ($_SESSION['LoggedIn'] == "")
{
	header("Location: admin.php");
}
		?>

<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="css/dashboard.css">
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<?php include ('includeMenu.php'); ?>
			
		<div id="container">
			<?php include ('includeHead.php'); ?>
			<div id="content">
				<h2><i class="fa fa-file-o" aria-hidden="true"></i> Page(s)</h2>
					<ul>
						<li><a href="adminEditHome.php">Homepage</a></li>
						<li>Page one</li>
						<li>Page one</li>
					</ul>
			</div>
		</div>

	</body>
</html>