<?php session_start(); 
$user = $_SESSION['User'];
?>
<div id="header">
	<img src="img/logo2.png" class="logoheader" alt="logo" />
	<ul id="topMenu">
		<li><i class="fa fa-user" aria-hidden="true"></i> Welkom, <?php echo $user ?></li>
		<li><a href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Mijn Account</a></li>
		<li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Uitloggen</a></li>
	</ul>
</div>