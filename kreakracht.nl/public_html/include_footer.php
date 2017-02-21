<!DOCTYPE html>
<?php 
include ('cms/db_include.php');
if ($conn === FALSE)
			{
				echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
			} else
			{
				$TableName = "footer";
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
					} else
					{ 
						$value1 = $Message['kop1'];
					}
				}
			}
?>

<div class="footer">
	<div class="footer2">
		<p><?php echo $value1 ?></p>
	</div>
</div>
