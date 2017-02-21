<html>
	<head>
		<title>Contact Kreakracht</title>
		<link rel="stylesheet" type="text/css" href="stylefoto.css">
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
			 <h2 class="contentKop">Foto's Stichting Kinderwens</h2>
			 <p>Kunstwerken gemaakt met (terminaal) zieke kinderen met of zonder hun familie.</p><br><br>
				  
				  <!--<div id="myBtn" class="box"><div class="boxInner"><img src="img/festival1.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div id="myModal" class="modal2">
				  <div class="modal-content">
					<span class="close">&times;</span>
					<img src="img/festival1.jpg">
				  
				  </div>
				</div> -->
				  <div class="box"><div class="boxInner"><img src="img/wens1.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens2.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens3.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens4.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens5.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens6.jpg"/><div class="titleBox">Foto1</div></div></div>
				  <div class="box"><div class="boxInner"><img src="img/wens7.jpg"/><div class="titleBox">Foto1</div></div></div>
			<script>
				
				var modal = document.getElementById('myModal');

				var btn = document.getElementById("myBtn");
				
				var span = document.getElementsByClassName("close")[0];
				
				btn.onclick = function() { modal.style.display = "block";}

				span.onclick = function() {modal.style.display = "none";}

				window.onclick = function(event) {if (event.target == modal) {modal.style.display = "none";}}
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