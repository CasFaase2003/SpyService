<?php include("config/db_config2.php"); ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Testje</title>
    <style>
        body, html {padding: 50px; font-size: 18px;}
    </style>
</head>

<body>

    <?php
	
	$sQuery = "SELECT * FROM user ORDER BY registratiedatum"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 1 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE id='8'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 2 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE id > 8;"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 3 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE id BETWEEN 5 AND 12"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Oprdracht 4 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE gebruikersnaam='dikkebertha'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 5 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE gebruikersnaam <> 'broerkonijn'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 6 <br>

     <?php
	
	$sQuery = "SELECT * FROM user WHERE registratiedatum >= '2023-01-01'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 7 <br>

    <?php
	
	$sQuery = "SELECT * FROM user WHERE registratiedatum BETWEEN '2020-01-01' AND '2020-12-31'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 8 <br>

    <?php
	
	$sQuery = "SELECT * FROM user LIMIT 2"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 9 <br>

    <?php
	
	$sQuery = "SELECT * FROM user WHERE id BETWEEN 5 AND 7"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 10 <br>

    <?php
	
	$sQuery = "SELECT * FROM user ORDER BY voornaam"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 11 <br>

    <?php
	
	$sQuery = "SELECT * FROM user ORDER BY id DESC"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

    <hr>

    Opdracht 12 <br>

    <?php
	
	$sQuery = "SELECT * FROM user WHERE voornaam LIKE '%bert%'"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

	while($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) 
        {
			$id = 	$aRow["id"];
            $voornaam = 	$aRow["voornaam"];
            $gebruikersnaam = 	$aRow["gebruikersnaam"];
            $wachtwoord = 	$aRow["wachtwoord"];
            $registratiedatum = 	$aRow["registratiedatum"];
        
            echo"$id / $voornaam / $gebruikersnaam / $registratiedatum<br>";
        }
	?>

     <hr>

    Opdracht 13 <br>

    <?php
	
	$sQuery = "DELETE From user WHERE id = 9";

    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute();

        echo"Goodbye";
	?>

    <hr>

    Opdracht 14 <br>

    <?php
	
	$sQuery = "INSERT INTO user (id, gebruikersnaam, wachtwoord, voornaam, registratiedatum) VALUES (0, 'Mr.Tetris', 'tetromino', 'Alexey', '1996-08-02')"; 
     
    $oStmt = $conn->prepare($sQuery);
    $oStmt->execute(); 

        echo"Welcome Mr.Tetris";
	?>

    <hr>

    Opdracht 15 <br>

    <?php

    $gebruikersnaam="WarioMan";
    $wachtwoord="MONEY!!";
    $voornaam="Wario";
    $registratiedatum="2023-05-22";

    $sQuery = "INSERT INTO user (id, gebruikersnaam, wachtwoord, voornaam, registratiedatum) VALUES (0, :gebruikersnaam, :wachtwoord, :voornaam, :registratiedatum)";

    $oStmt = $conn->prepare($sQuery);
    
    $oStmt->bindParam(':gebruikersnaam', $gebruikersnaam);
    $oStmt->bindParam(':wachtwoord', $wachtwoord);
    $oStmt->bindParam(':voornaam', $voornaam);
    $oStmt->bindParam(':registratiedatum', $registratiedatum);

    $oStmt->execute();

    echo "WARIO, GONNA WIN!!"

    ?>
    
</body>
</html>