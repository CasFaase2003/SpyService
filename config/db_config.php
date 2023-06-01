<?php
session_start();

if (isset($_POST["Submit"])) {
  $gebruikersnaam = $_POST["Naam"];
  $wachtwoord = $_POST["Wachtwoord"];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "spyservice";

  try {
    if (empty($gebruikersnaam)) {
      header("Location: ../index.php");
      exit();
    }
    if (empty($wachtwoord)) {
      header("Location: ../index.php");
      exit();
    }


    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Succesvol verbonden met database $database.";

    $queryUser = $conn->prepare("SELECT * FROM user WHERE gebruikersnaam = :gebruikersnaam");
    $queryUser->bindparam(":gebruikersnaam", $gebruikersnaam);
    $queryUser->execute();
    $userExists = $queryUser->rowCount() > 0;


    while ($aRow = $queryUser->fetch(PDO::FETCH_ASSOC)) {
      $dbwachtwoord = $aRow["wachtwoord"];
      echo ($dbwachtwoord);
      if (password_verify($wachtwoord, $dbwachtwoord)) {
        $_SESSION["login"] = true;
        header("Location: ../index.php?pagina=Document");
      } else {
        header("Location: ../index.php?pagina=Login&error=Uw gebruikersnaam of wachtwoord is fout probeer het opnieuw");
      }

    }

  } catch (PDOException $foutje) {

    echo "Probleem: " . $foutje->getMessage();

  }
}
?>