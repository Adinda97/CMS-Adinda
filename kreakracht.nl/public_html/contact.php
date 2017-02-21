<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "contact";
				if (!mysqli_select_db($conn, $DBName))
				{
					echo "<p>Unable to connect to the " . $DBName . " database!!!</p>";
				}
				else
				{
					$SQLstring = "SELECT * FROM $TableName";
					$sql = mysqli_query($conn, $SQLstring);
					$Message = mysqli_fetch_array($sql);
					if ($Message === FALSE)
					{
						echo "Unable to execute the query." . "Error code " . mysqli_errno() . ": " . mysqli_error() . "";
					} else if (mysqli_num_rows($sql) == 0)
					{
						$value1 = "Geen gegevens";
						$value2 = "Geen gegevens";
					} else
					{ 
						$value1 = $Message['kop1'];
						$value2 = $Message['text1'];
					}
				}
			}
?>


<html>
	<head>
		<title>Contact Kreakracht</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	</head>
	
	<body>
	
	
	<div id="maincontainer">
		
		<?php 
			include 'include_header.php';
			include 'include_menu.php';
			include 'include_slider.php';
		?>
		
		
		<div class="content">
			<div class="content2">
			 <div class="content2a">
			 <h2 class="contentKop"><?php echo $value1?></h2>
				 <p><?php echo $value2?> <!--
				 <b>Kreakracht</b><br>
				Jacqueline Zwiebel<br>
				Kerkweg 30<br>
				9439 PG Witteveen<br>
				Drenthe, Nederland<br><br>
				
				<i>Heeft u vragen? Dan kunt u via de onderstaande gegevens contact opnemen.</i><br>
				T: 0593 - 55 24 01<br>
				M: 06 - 12 41 61 30<br>
				@:  info@kreakracht.nl<br>
				W: www.kreakracht.nl<br> -->
				  </p>
				  <br>
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2411.6565206326222!2d6.657404116143484!3d52.8105299798702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c81e4e020a24f9%3A0xa3eeba89e619de41!2sKerkweg+30%2C+9439+PG+Witteveen!5e0!3m2!1snl!2snl!4v1486411358311" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			<div class="content2b">
			 <?php 
			include 'includeMenuRechts.php'; 
		?>
				
			</div>	
			</div>
		</div>
		<?php 
			include 'include_footer.php'; 
		?>
	</div>
			
	</body>
</html>