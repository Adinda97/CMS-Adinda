<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "schoolbso";
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
						$value3 = "Geen gegevens";
						$value4 = "Geen gegevens";
						$value5 = "Geen gegevens";
						$value6 = "Geen gegevens";
						$value7 = "Geen gegevens";
						$value8 = "Geen gegevens";
						$value9 = "Geen gegevens";
						$value10 = "Geen gegevens";
						$value11 = "Geen gegevens";
						$value12 = "Geen gegevens";
					} else
					{ 
						$value1 = $Message['kop1'];
						$value2 = $Message['text1'];
						$value3 = $Message['kop2'];
						$value4 = $Message['text2'];
						$value5 = $Message['kop3'];
						$value6 = $Message['text3'];
						$value7 = $Message['kop4'];
						$value8 = $Message['text4'];
						$value9 = $Message['kop5'];
						$value10 = $Message['text5'];
						$value11 = $Message['kop6'];
						$value12 = $Message['text6'];
					}
				}
			}
?>

<html>
	<head>
		<title>School/BSO projecten Kreakracht</title>
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
				 <p><?php echo $value2 ?>
				 <!--KreaKracht biedt een aantal projecten die, per school, op maat kunnen worden gegeven. 
				 Deze culturele activiteiten zijn niet alleen leuk en leerzaam, maar ze versterken tevens de verbindingen op school. 
				 Er is aandacht voor de doorgaande leerlijn en de 21st century skills. Het betreft zowel actief, receptief als reflectief cultuuronderwijs.<br><br>

					In de doorgaande leerlijn worden culturele activiteiten in samenhang aangeboden:<br>

					- Activiteiten passen bij andere vakken op school<br>
					- De ene activiteit bouwt voort op het ander en past bij de belevingswereld van de leerling -activiteiten passen bij de vakoverstijgende vaardigheden.<br><br>

					Een doorgaande leerlijn cultuuronderwijs kent verticale én horizontale samenhang. (informatie gebaseerd op voorwaarden cultuuronderwijs http://www.compenta.nl/)<br><br> -->
				 </p><br><br>
				 <h3 class="contentKop">Projecten</h3>
				 <br>
				 <h4>Wetenschap en technologie</h4>
				 <h5 id="myBtn"><?php echo $value3 ?></h5><br><br>
				 <h4>Kunst, cultuur en erfgoed</h4>
				 <h5 id="myBtn2"><?php echo $value5 ?></h5>
				 <h5 id="myBtn3"><?php echo $value7 ?></h5><br><br>
				 <h4>Sport, educatie en welzijn</h4>
				 <h5 id="myBtn4"><?php echo $value9 ?></h5><br><br>
				 <h4>Muziek en beeldende vormgeving</h4>
				 <h5 id="myBtn5"><?php echo $value11 ?></h5>

				<div id="myModal" class="modal">
				  <div class="modal-content">
					<span class="close">&times;</span>
					<h2><?php echo $value3 ?><!--Techniek is cool!--></h2><br>
					<p><?php echo $value4 ?>
					<!--Op een speelse manier kennismaken met techniek en wetenschap.<br><br>
					 Tijdens dit project kunnen kinderen uit alle leeftijdsgroepen van de basisschool kennismaken met diverse vormen van techniek passend bij hun eigen leeftijd. Het is maatwerk, dus in overleg met de school wordt bepaald hoeveel lessen er worden gegeven, wat de focus is van de lessen, of/en welke lesbrief er wordt gebruikt en welke groepen in aanmerking komen. Bovendien wordt er zo veel mogelijk (indien gewenst) gebruik gemaakt van materiaal en gereedschap dat reeds aanwezig is op de school en is recyclen bij dit project van belang, niet alleen in het kader van duurzaamheid, maar ook om de kosten zo laag mogelijk te houden. <br><br>
					 Andere vaardigheden die kunnen worden gebruikt zijn : meet- en rekenvaardigheden, samenwerken en overleggen, hoe een schema te lezen of te maken of hoe de stappen van een gebruiksaanwijzing moeten worden gevolgd.<br><br>

					 Enkele voorbeelden zijn: maken van een mini-robot, mini-lampje, werken met de 3D printerpen, regenmeter, klok.<br><br>

					 Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe), materiaalkosten van 0,50 tot 3,- per kind, afhankelijk van de keuze van het onderwerp.-->
										</p>
				  
				  </div>
				</div>
				<div id="myModal2" class="modal">
				  <div class="modal-content">
					<span class="close2">&times;</span>
					<h3><?php echo $value5 ?><!--Snuffelen aan kunst(geschiedenis)--></h3><br>
					<p><?php echo $value6 ?><!--
					In dit project kunnen kinderen, aangepast aan hun leeftijdsniveau, kennismaken met de geschiedenis van de kunst en/of kunst uit andere culturen. Het is een combinatie van horen, zien, onderzoeken en daarna vooral zelf doen.<br><br>
					Er kan, aangepast aan de wensen van de school, worden gewerkt met verschillende technieken. Voor de hogere leeftijdsgroepen is bijvoorbeeld brandschilderen of werken met steen mogelijk. Bovendien kan er worden kennisgemaakt met technieken als mozaïek, werken met (pastel)krijt en houtskool, inkt etc.<br><br>
					Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe), materiaalkosten van 0,50 tot 3,- per kind afhankelijk van het gekozen materiaal.-->
					</p>
				  
				  </div>
				</div>
				<div id="myModal3" class="modal">
				  <div class="modal-content">
					<span class="close3">&times;</span>
					<h3><?php echo $value7 ?><!--Samen sterk--></h3><br>
					<p><?php echo $value8 ?><!--
					In dit project kan worden gewerkt aan een gezamenlijk kunstwerk voor binnen of buiten, een tentoonstelling of het decor voor de musical. Dit kan met een enkele klas, of met kinderen uit diverse klassen. Afhankelijk van de wensen van de school kan er worden gewerkt met diverse technieken van graffiti en mozaïek tot verf, steen of recyclematerialen.<br><br>
					De focus ligt op het samenwerken en op het zorgen dat ieder zijn eigen deel kan bijdragen aan het grotere geheel.<br><br>
					Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe). Materiaalkosten zijn afhankelijk van het gekozen materiaal en het aantal kinderen.-->
					</p>
				  
				  </div>
				</div>
				<div id="myModal4" class="modal">
				  <div class="modal-content">
					<span class="close4">&times;</span>
					<h3><?php echo $value9 ?><!--Creatief sportief--></h3><br>
					<p><?php echo $value10 ?><!--
					In dit project kan er worden aangesloten bij een sportief thema of een buitenspeeldag. Er zijn diverse activiteiten waarbij zelf spellen kunnen worden gemaakt eventueel gecombineerd met een stoepkrijtwedstrijd. Er kunnen zelf springtouwen worden geknoopt, maar ook spellen als jeu de boules of blik lopen zijn mogelijk.<br><br>
					Het project kan worden aangepast aan de wensen van de school. Er wordt zoveel mogelijk gewerkt met recycle materialen, niet alleen in verband met duurzaamheid, maar ook om de kosten laag te houden.<br><br>
					Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe). Materiaal afhankelijk van de keuze en aantal kinderen.-->
					</p>
				  
				  </div>
				</div>
				<div id="myModal5" class="modal">
				  <div class="modal-content">
					<span class="close5">&times;</span>
					<h3><?php echo $value11 ?><!--Muzikracht--></h3><br>
					<p><?php echo $value12 ?><!--
					In dit project leren kinderen, aangepast aan hun leeftijdsniveau, over geluid. Hoe maak je geluid en hoe kun je dit geluid versterken? En hoe wordt geluid dan weer muziek? Er worden verschillende, echte én zelfgemaakte muziekinstrumenten (blaas-, slag- en snaarinstrumenten) gedemonstreerd en kinderen mogen zelf ook proberen geluiden te maken. Daarna mogen kinderen zelf aan de slag om een eigen instrument te maken.<br><br>
					Dit project en het aantal lessen kan worden aangepast aan de wensen van de school. Bovendien kan er, in overleg, worden samengewerkt met een muziekdocent, om met de zelfgemaakte instrumenten een lied in te studeren en eventueel later uit te voeren.<br><br>
					Er wordt zo veel mogelijk gewerkt met recycle materiaal en (indien aanwezig) gereedschap van school, niet alleen in verband met duurzaamheid, maar ook om de kosten laag te houden.<br><br>
					Kosten 50,- (inclusief reiskosten binnen Midden-Drenthe) per les, materiaalkosten 0,50 per kind.-->
					</p>
				  
				  </div>
				</div>
				<script>
				
				var modal = document.getElementById('myModal');
				var modal2 = document.getElementById('myModal2');
				var modal3 = document.getElementById('myModal3');
				var modal4 = document.getElementById('myModal4');
				var modal5 = document.getElementById('myModal5');

				var btn = document.getElementById("myBtn");
				var btn2 = document.getElementById("myBtn2");
				var btn3 = document.getElementById("myBtn3");
				var btn4 = document.getElementById("myBtn4");
				var btn5 = document.getElementById("myBtn5");
				
				var span = document.getElementsByClassName("close")[0];
				var span2 = document.getElementsByClassName("close2")[0];
				var span3 = document.getElementsByClassName("close3")[0];
				var span4 = document.getElementsByClassName("close4")[0];
				var span5 = document.getElementsByClassName("close5")[0];
				
				btn.onclick = function() { modal.style.display = "block";}
				btn2.onclick = function() { modal2.style.display = "block";}
				btn3.onclick = function() { modal3.style.display = "block";}
				btn4.onclick = function() { modal4.style.display = "block";}
				btn5.onclick = function() { modal5.style.display = "block";}

				span.onclick = function() {modal.style.display = "none";}
				span2.onclick = function() {modal2.style.display = "none";}
				span3.onclick = function() {modal3.style.display = "none";}
				span4.onclick = function() {modal4.style.display = "none";}
				span5.onclick = function() {modal5.style.display = "none";}

				window.onclick = function(event) {if (event.target == modal) {modal.style.display = "none";}}
				window.onclick = function(event) {if (event.target == modal2) {modal2.style.display = "none";}}
				window.onclick = function(event) {if (event.target == modal3) {modal3.style.display = "none";}}
				window.onclick = function(event) {if (event.target == modal4) {modal4.style.display = "none";}}
				window.onclick = function(event) {if (event.target == modal5) {modal5.style.display = "none";}}
				</script>
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