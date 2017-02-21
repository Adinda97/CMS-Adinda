<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "homepagina";
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
		<title>Homepagina Kreakracht</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
			 <h2 class="contentKop"><?php echo $value1 ?><!--Ontwikkelen van eigen kreativiteit geeft kracht!--></h2><br>
				 <p><?php echo $value2 ?>
				 <!--De activiteiten zijn geschikt voor iedereen, ook voor personen zonder creatieve ervaring. Iedereen is een kunstenaar en het is geweldig om anderen te helpen om dit bij zichzelf te ontdekken! Een ongedwongen sfeer, ruimte voor sociaal contact en met het bieden van veel, de zintuigen prikkelend materiaal, maakt iedereen zijn eigen unieke werkstuk !<br><br>
				 Er zijn workshops voor bestaande groepen volwassenen zoals voor een vrijgezellenfeestje of zussendag, K&C lessen voor kinderen, maar ook diverse inloopworkshops geschikt voor op een festival of markt. <br><br>
				Jacqueline Zwiebel is de persoon achter KreaKracht. Momenteel bezig met een studie kunstgeschiedenis. Ooit begonnen als fysio- en psychomotorisch therapeut, daarna lang gewerkt als pedagogisch begeleider na het volgen van een HBO pedagogiek, maar altijd bezig met en lessen volgend in o.a. schilderen en beeldhouwen. Sinds 15 jaar ook zelf steeds meer aan het les geven. Met heel veel plezier, want niets is zo leuk als het zien hoe iemand opbloeit bij het maken van een eigen kunstwerk!<br><br>
				Deelnemer aan o.a. Oktober Kindermaand, Gekleurd Grijs, Cultuurmenu (K&C Drenthe), Brede School Activiteiten (Emmen/Noordenveld), Kunst in de Club en de Buurtacademie, Het Kuna festival, de Drentse fiets4daagse enz.
				 --></p>
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