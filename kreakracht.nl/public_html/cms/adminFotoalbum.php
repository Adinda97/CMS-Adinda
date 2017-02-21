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

include ('db_include.php');

if(isset($_GET['delete']))
{
	$sql = "DELETE FROM Fotos2014 WHERE imgID ='" . $_GET['delete'] . "';";
	mysqli_query($conn, $sql);
}

if(isset($_POST['upload']))
{
	if ($conn === FALSE)
	{
		echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
	} else
	{
		$TableName = "Fotos2014";
		if (!mysqli_select_db($conn, $DBName))
		{
			DIE("<p>Kan niet connecten met $DBName database!</p>");
		} else
		{
			$file = $_FILES['image'];					
			$imgType = $file['type'];
			$imgSize = $file['size'];
			$imgName = $file['name'];
			
			// Checken op image type en size
			if ((($imgType == "image/jpeg") || ($imgType == "image/jpg") || ($imgType == "image/png")) && ($imgSize < 3145728)) //3145728 = gelijk aan 3mb
			{
				if ($file["error"] > 0)
				{
					echo "Return Code: " . $file["error"] . "<br />";
				}
				else
				{
					if (file_exists("fotos2014/" . $imgName))
					{
						?>
							<script type="text/javascript">
								alert("Fout met uploaden. Deze afbeelding bestaat al. Hernoem je afbeelding en probeer het opnieuw");
								window.location.href = "adminFotos1.php";
							</script>
							<?php
					}
					else
					{
						move_uploaded_file($file["tmp_name"], "fotos2014/" . $imgName);
						$imgSrc = "fotos2014/" . $imgName;
						$SQLstring = "INSERT INTO $TableName VALUES ('', '$imgSrc');";
						$QueryResult = mysqli_query($conn, $SQLstring);
						if($QueryResult === FALSE)
						{
							?>
							<script type="text/javascript">
								alert("Fout met uploaden.");
								window.location.href = "adminFotos1.php";
							</script>
							<?php
							
						} else
						{
							?>
							<script type="text/javascript">
								alert("Succesvol geüpload!");
								window.location.href = "adminFotos1.php";
							</script>
							<?php
						}
					}
				}	
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('Je bestand moet onder de 3mb zijn en .jpg of .png');
					window.location.href = "adminFotos1.php";
				</script>
				<?php
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="css/dashboard.css">
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
	</head>
	
	<body>
		<?php include ('includeMenu.php'); ?>
			
		<div id="container">
			<?php include ('includeHead.php'); ?>
			<div id="content">
				<h2><i class="fa fa-upload" aria-hidden="true"></i> Foto's uploaden</h2>
				
				<form enctype="multipart/form-data" method="post" action="#" class="formUpload" >
				
						<h3>Foto 1</h3>
						<input type="file" name="image" class="editBox" />
					<br />
					<input type="submit" name="upload" value="upload"/>
					
				<br>
				<?php
					if ($conn === FALSE)
					{
						echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
					} else
					{
						$SQLstring = "SELECT * FROM Fotos2014 ORDER BY `imgID` ASC";
						$sql = mysqli_query($conn, $SQLstring);
						while($Message = mysqli_fetch_assoc($sql))
						{
							echo "<img class= " . $Message['imgID'] . "' src='" . $Message['imgSrc'] . "' width='200px'/><a href='?delete=" . $Message['imgID'] . "'><i class='fa fa-times' aria-hidden='true'></i></a>";
						}
					}		
					?>
				
					</form>
					
			</div>
		</div>
	
        
	</body>
</html>
