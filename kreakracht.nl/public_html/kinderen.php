<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "kinderen";
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
		<title>Workshops voor Kinderen Kreakracht</title>
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
				 <p> <?php echo $value2 ?><!--Ik werk graag met kinderen, dit doe ik met veel plezier. Belangrijk is om materiaal aan te bieden waarin kinderen hun eigen fantasie kwijt kunnen.<br><br>
				 Hieronder staan enkele mogelijkheden van technieken. Het aanbod wordt echter constant vernieuwd en het is ook mogelijk om huidig aanbod aan te passen aan bepaalde wensen of omstandigheden.<br><br>
				Origami/papier vouwen, paasstukjes maken, mini mozaiek, muziek intrumenten maken, fantasiedieren maken van klei, mini boekjes maken<br><br>

				Speed spray painting, Black Light Painting, brandschilderen in hout en graveren van glas, hout of metaal, zelf papier maken. geschikt voor de oudere kinderen !<br><br>

				- Kennismaking met technieken als schilderen, speksteen, mozaïek, cartoon tekenen, papier scheppen, brandschilderen, werken met textielverharder of boetseren.<br>
				- Maken van kettingen en sieraden (o.a. van klei of speksteen), naambordjes, paas-, herfst- of kersttafereeltjes, graffitiborden, "robots",  mobiles, windgongen, vliegers of dromenvangers, werken met fietsbanden, gasbeton, papier, schilderen met stofjes en diverse andere "creatieve knutsels".<br>
				- Eenmalige workshop of serie workshops achter elkaar in een bepaald thema bij u op school of buitenschoolse opvang<br>
				 - Ook is het mogelijk een creatief kinderfeestje in combinatie met ponyrijden te verzorgen op de Hendrinahoeve in Witteveen.-->
				  </p>
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