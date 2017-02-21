<?php session_start(); 
if ($_SESSION == NULL) {
    $_SESSION['LoggedIn'] = "";
    $_SESSION['emailadres'] = "";
    $_SESSION['gebruikerID'] = "";
}

if ($_SESSION['LoggedIn'] == "")
{
	header("Location: admin.php");
}
?>

<?php
include ('db_include.php');
if(isset($_POST['update']))
{
	if ($conn === FALSE)
	{
		echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
	} else
	{
		$TableName = "schoolbso";
		if (!mysqli_select_db($conn, $DBName))
		{
			DIE("<p>Kan niet connecten met $DBName database!</p>");
		} else
		{
			$editText11 = $_POST['kop6'];
			$editText12 = $_POST['text6'];
			$SQLstring = "UPDATE `$TableName` SET `kop6`='$editText11', `text6`='$editText12' WHERE 1";
				
			$QueryResult = mysqli_query($conn, $SQLstring);
			if($QueryResult === FALSE)
			{
				?>
				<script type="text/javascript">
					alert("Unable to update.");
					window.location.href = "EditProject05.php";
				</script>
				<?php
			} else
			{
				?>
				<script type="text/javascript">
				alert("Submitted successfully!");
				window.location.href = "EditProject05.php";
				</script>
				<?php
			}
		}
	}
}	

?>

<?php
if ($conn === FALSE)
{
	echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";
} else
{
	$TableName = "schoolbso";
	$SQLstring = "SELECT * FROM $TableName";
	$sql = mysqli_query($conn, $SQLstring);
	$Message = mysqli_fetch_array($sql);
	if ($Message === FALSE)
	{
		echo "Unable to execute the query." . "Error code " . mysqli_errno($conn) . ": " . mysqli_error($conn) . "";
	} else if (mysqli_num_rows($sql) == 0)
	{
		$value11 = "Geen gegevens";
		$value12 = "Geen gegevens";
	} else
	{ 
		$value11 = $Message['kop6'];
		$value12 = $Message['text6'];
	}
}		
			?>

<!DOCTYPE html>
<html>
	<head>
		<title>Wijzig paginga Project 5</title>
		<link rel="stylesheet" href="css/dashboard.css">
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea',
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste image imagetools"
			],
		menubar: "insert",
		imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
		content_css: [
		'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
		'//www.tinymce.com/css/codepen.min.css'
		]
		
		});</script>
	</head>
	
	<body>
		<?php include ('includeMenu.php'); ?>
			
		<div id="container">
			<?php include ('includeHead.php'); ?>
			<div id="content">
				<h2><i class="fa fa-file-o" aria-hidden="true"></i> Wijzig Pagina Project 5</h2>
					<form  method="post" action="#" class="formPage">
						<h3>Titel 1</h3>
						<input type="text" name="kop6" class="editBox" value="<?php echo $value11 ?>" /><br>
						<h3>Tekst 1</h3>
						<textarea name="text6" class="editArea"><?php echo $value12; ?></textarea>
					<input type="submit" name="update" class="updateBtn" value="Opslaan" />
				</form>
			</div>
		</div>

	</body>
</html>