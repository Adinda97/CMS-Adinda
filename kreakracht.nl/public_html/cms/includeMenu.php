<div id="menu">
	<ul>
		<li><a href="adminDashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
			<li class="dropdown">
			  <a href="#" data-toggle="dropdown"><i class="fa fa-asterisk" aria-hidden="true"></i> Algemeen<i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
						<li><a href="adminSlider.php">Slider</a></li>
						<li><a href="adminFooter.php">Footer</a></li>
						<li><a href="EditMenuRechts.php">Menu Rechts</a></li>
				  </ul>
			</li>
			
			<li class="dropdown">
			  <a href="#" data-toggle="dropdown"><i class="fa fa-file-o" aria-hidden="true"></i> Pagina's</a>
				  <ul class="dropdown-menu">
						<li><a href="EditHomepagina.php"><i class="fa fa-circle-o" aria-hidden="true"></i> Home</a></li>
						<li><a href="EditVolwassenen.php"><i class="fa fa-circle-o" aria-hidden="true"></i> Workshops volwassenen</a></li>
						<li><a href="EditKinderen.php"><i class="fa fa-circle-o" aria-hidden="true"></i> Workshops Kinderen</a></li>
						<li><a href="EditSchoolbso.php"><i class="fa fa-circle-o" aria-hidden="true"></i> School/BSO</a></li>
						<li><a href="EditContact.php"><i class="fa fa-circle-o" aria-hidden="true"></i> Contact</a></li>
				  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" data-toggle="dropdown"><i class="fa fa-asterisk" aria-hidden="true"></i> Projecten<i class="icon-arrow"></i></a>
				  <ul class="dropdown-menu">
						<li><a href="EditProject01.php">Techniek is cool!</a></li>
						<li><a href="EditProject02.php">Snuffelen aan kunst(geschiedenis)</a></li>
						<li><a href="EditProject03.php">Samen sterk</a></li>
						<li><a href="EditProject04.php">Creatief sportief</a></li>
						<li><a href="EditProject05.php">Muzikracht</a></li>
				  </ul>
			</li>
		
		<li><a href="../index.php"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Zie voorkant</a></li>
	</ul>
</div>

<div id="menu2">
		<a id="menuTeken" href="#" style="display:inline-block;" onclick="w3_open()"><i class="fa fa-bars menuIcon" aria-hidden="true"></i></a>
	</div>
	 
	<div class="animateMenu">
				<nav>	
					<a id="menuTeken" href="#" onclick="w3_close()"><i class="fa fa-times menuIcon" aria-hidden="true"></i></a>
					<ul id="animateUL">
						<li></li>
						<li><a href="adminDashboard.php">Dashboard</a></li>
						<li><a href="EditHomepagina.php">Homepagina</a></li>
						<li><a href="EditVolwassenen.php">Workshops volwassenen</a></li>
						<li><a href="EditKinderen.php">Workshops kinderen</a></li>
						<li><a href="EditSchoolbso.php">School/Bso</a></li>
						<li><a href="EditContact.php">Contact</a></li>
						<li><a href="adminSlider.php">Slider</a></li>
						<li><a href="adminFooterphp">Footer</a></li>
						<li><a href="../index.php"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Zie voorkant</a></li>
						<li><a href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Mijn Account</a></li>
						<li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Uitloggen</a></li>
                    </ul>
					
			</nav>
				
    </div>
	
	<script>
			function w3_open()
			{
				document.getElementsByClassName("animateMenu")[0].style.margin = "0px";
			}
			function w3_close()
			{
				document.getElementsByClassName("animateMenu")[0].style.margin = "-210px";
			}
		</script>


<script>
// Dropdown Menu
var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu');

	button.onclick = function(event) {
		if(!menu.hasClass('show')) {
			menu.classList.add('show');
			menu.classList.remove('hide');
			event.preventDefault();
		}
		else {
			menu.classList.remove('show');
			menu.classList.add('hide');
			event.preventDefault();
		}
	};
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};
</script>