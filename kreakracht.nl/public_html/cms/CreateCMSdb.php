<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Creating User Database en Table</title>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
    </head>
    <body>
        <?php
        $DBName = "adindqz158_CMS";
        $DBConnect = mysqli_connect("10.3.1.108", "adindqz158_CMS04", "admin");
        if ($DBConnect === FALSE) 
		{
            echo "<p>Verbindings error: " . mysqli_error() . "</p>\n";
        } else 
		{
            $createDB = "CREATE DATABASE $DBName";
            if (mysqli_query($DBConnect, $createDB) === FALSE) 
			{
				if(mysqli_errno($DBConnect) == 1007)
				{
					echo "<p>De database bestaat al.</p>" ;
				}
				else
				{
					echo mysqli_errno($DBConnect);
				}
            } else 
			{
                echo "<p>Met succes de database  " . "\"$DBName\" aangemaakt.</p>\n";
            }
        }
		
		if ($DBConnect === FALSE) 
		{
            echo "<p>Verbindings error: " . mysqli_error() . "</p>\n";
        } else 
		{
            if (!mysqli_select_db($DBConnect, $DBName)) 
			{
				echo "<p>Kan niet connecten met $DBName database!</p>";
            } 
			else 
			{
				///Page One
				$TableName = "pageOne";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageOneID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Page Two
				$TableName = "pageTwo";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageTwoID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Page Three
				$TableName = "pageThree";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageThreeID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Page Four
				$TableName = "pageFour";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageTwoID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Page Five
				$TableName = "pageFive";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageFiveID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Page Six
				$TableName = "pageSix";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					pageSixID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    kop1 VARCHAR(200),
					kop2 VARCHAR(200),
					text1 VARCHAR(200),
					text2 VARCHAR(200))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
				
				///Gebruikers
				$TableName = "gebruikers";
				$SQLString = "SHOW TABLES LIKE '$TableName'";
                $QueryResult = mysqli_query($DBConnect, $SQLString);
                if ($QueryResult === FALSE)
				{
					echo "<p>Database query error for $TableName</p>";
                } else if (mysqli_num_rows($QueryResult) == 0)
				{
                    $SQLString = "CREATE TABLE $TableName (
					gebruikersID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(40),
					wachtwoord VARCHAR(40))";

                    $QueryResult = mysqli_query($DBConnect, $SQLString);
                    if ($QueryResult === FALSE)
					{
                        echo "<p>Kan de tabel '$TableName' niet aanmaken.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                    } else
					{
                        echo "<p>Met succes de tabel " . "'$TableName' aangemaakt.</p>";
                    }
                } else
				{
                    echo "<p>Tabel $TableName bestaat al.</p>";
                }
            }
            mysqli_close($DBConnect);
        }
        ?>
    </body>
</html>

