<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "spyservice";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Succesvol verbonden met database $database.";
}
catch(PDOException $foutje) {
        
  	echo "Probleem: " . $foutje->getMessage();

	}
?>