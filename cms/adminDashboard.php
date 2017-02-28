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
				<h2><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h2>
				
				<div id="update">
					<div id="updateHeader">
						<h3><i class="fa fa-external-link-square" aria-hidden="true"></i> Adinda Media Updates</h3>
					</div>
				<div id="updateContent">
					<img class="mySlides" src="http://adindamedia.nl/img/websitebanner.png" alt="slider1"> 
					<img class="mySlides" src="http://adindamedia.nl/img/websitebanner2.png" alt="slider2">
							  
					<a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
					<a class="w3-btn-floating w3-display-right" onclick="plusDivs(+1)">&#10095;</a>
						
						<script>
						var slideIndex = 1;
						showDivs(slideIndex);

						function plusDivs(n) {
							showDivs(slideIndex += n);
						}

						function showDivs(n) {
							var i;
							var x = document.getElementsByClassName("mySlides");
							if (n > x.length) {slideIndex = 1} 
							if (n < 1) {slideIndex = x.length} ;
							for (i = 0; i < x.length; i++) {
								x[i].style.display = "none"; 
							}
							x[slideIndex-1].style.display = "block"; 
						}
						</script> 
					
					</div>
				</div>	
				<div id="contentRight">
					<div id="marqueeHeader">
							<p class="marquee"><span id="dtText"></span></p>
							<script>
							var today = new Date();
							document.getElementById('dtText').innerHTML=today;
							</script>
						</div>
				
					<div id="news">
						<div id="newsHeader">
								<h3><i class="fa fa-newspaper-o" aria-hidden="true"></i> Nieuws</h3>
						</div>
						<div id="newsContent">
						
							<h4>Wat gaat er nog veranderen</h4>
							<p>Wij hopen dat het systeem zo snel mogelijk beschikbaar is.</p>
							<hr>
							<h4>Waar wij nu aan werken</h4>
							<p>Op het moment zijn bezig met het vernieuwen van het Dashboard. Daarnaast zijn wij de website aan het uitbereiden zodat er nu ook meerdere plaatjes en teksten kunnen worden aangepast. Wat ook erg leuk is, we zijn bezig met het plaatsen van een teksteditor. Zodat jullie ook gemakkelijk plaatjes kunnen toevoegen bij een stukje tekst. </p>
						</div>
					</div>
					
					<div id="contact">
						<div id="contactHeader">
								<h3><i class="fa fa-user" aria-hidden="true"></i> Contact</h3>
						</div>
						<div id="contactContent">
							<h4>Adinda Media</h4>
							<p>Wij zijn altijd te bereiken via: <br>
							<i class="fa fa-whatsapp" aria-hidden="true"></i> 06-53851520<br>
							<i class="fa fa-envelope-o" aria-hidden="true"></i> info@adindamedia.nl<br>
							<i class="fa fa-globe" aria-hidden="true"></i> www.adindamedia.nl</p>
							<p><i class="fa fa-facebook-official" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-instagram" aria-hidden="true"></i></p>
						</div>
					</div>
					<div id="nieuwsbrief">
						<div id="nieuwsbriefHeader">
							<h3><i class="fa fa-file" aria-hidden="true"></i> Nieuwsbrief</h3>
						</div>
						<div id="nieuwsbriefContent">
						<p>Hieronder kunt u zich aanmelden voor de nieuwsbrief van Adinda Media:</p>
							<form method="post" action="#" >
								<h4>Naam:</h4><input type="text" name="naam" class="newsletter_email" /><br />
								<h4>Email:</h4><input type="text" name="email" class="newsletter_email" /><br />
								<input type="submit" name="aanmelden" value=" Aanmelden " class="newsletter_button" />
							</form>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>

	</body>
</html>