<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "volwassenen";
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
		<title>Workshops voor volwassenen Kreakracht</title>
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
			 <h2 class="contentKop"><?php echo $value1 ?></h2>
				 <p><?php echo $value2 ?><!--<b>Op aanvraag verzorgen wij onder andere de volgende workshops</b><br><br>
				- Speksteen bewerken tot een beeldje, waxinelichtje of hanger.- Schilderen van een persoonlijke spreuk op een houten bordje of een tegel<br>
				- Maken van (mini)boekjes<br>
				- Boetseren met (fimo)kIei<br>
				- Schilderen (op doek, met een groep een groot schilderij, een houten bordje of bijv een betonnen beeld beschilderen)<br>
				- Mozaïek (bijvoorbeeld een spiegel of een dienblad) of mini mozaiek<br>
				- Werken met textielverharder of papier mache<br>
				- Etagere maken met "oud "servies"<br>
				- Porselein of glas schilderen<br>
				- Beeldhouwen in gasbeton<br>
				- Papier scheppen<br>
				- Creatief met kringloop dwz "pimpen" van diverse kringloopgoederen als dienbladen, kastjes, tafeltjes, vazen en dergelijke.
				- Maken van een "Herinnering" : mbv van eigen foto's/gedichten/verhalen en andere souvenirs en kastje, tafeltje of hoekje maken ter herinnering aan bijvoorbeeld een overledene, maar ook ook een bijzondere vakantie of een geliefd huisdier.<br>
				- Hondenspeeltjes maken van fleece (ook geschikt voor kinderen vanaf 7 jaar)<br><br>

				In overleg ook andere creatieve technieken mogelijk<br><br>

				De workshop kan plaatsvinden in het atelier van de Hendrinahoeve of desgewenst op locatie. <br>
				De prijzen variëren, afhankelijk van de groepsgrootte, de locatie en het gekozen materiaal, vanaf 5,- tot 20 euro/per persoon per workshop van 2 uur. Dit bedrag is inclusief koffie/thee, gebruik van gereedschap en materiaal.

-->
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