
<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "menurechts";
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
					} else
					{ 
						$value1 = $Message['kop1'];
						$value2 = $Message['text1'];
						$value3 = $Message['kop2'];
						$value4 = $Message['text2'];
					}
				}
			}
?>

<h2 class="contentKop"><?php echo $value1 ?> <!--Contact --></h2>
			 <p><?php echo $value2 ?> <!--
			 Kreakracht<br>
			 Mobiel: 06-12416130<br>
			 Email: info@kreakracht.nl<br>
			 Website: www.kreakracht.nl-->
			 </p><br>
			 <h2 class="contentKop"><?php echo $value3 ?> <!--Nieuw!--></h2>
			 <p><?php echo $value4 ?>
			 <!--Black Light workshops> schilderen op canvas in het bijna donker en werken met body paint en UV stiften maken een feest tot een echte belevenis!-->
			 </p><br>
			<a href="https://www.facebook.com/KreaKracht" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			 <a href="https://twitter.com/kreakracht" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			 <a href="https://www.instagram.com/kreakracht" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			 <a href="https://www.linkedin.com/in/jacquelinezwiebel" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><br>
			 
			 <img src="img/geeftkracht.png" width="240px">