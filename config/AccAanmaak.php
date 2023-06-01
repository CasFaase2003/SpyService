<?php
include("db_config2.php");

if (isset($_POST['submit'])) {
    $voornaam = $_POST["voornaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $wachtwoordHash = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $datum = date("y-m-d");

    if (empty($voornaam)) {
        header("Location: ../index.php?page=Account&error=Please enter your firstname");
        exit();
    } elseif (empty($gebruikersnaam)) {
        header("Location: ../index.php?page=Account&error=Please enter your username");
        exit();
    } elseif (empty($wachtwoord)) {
        header("Location: ../index.php?page=Account&error=Please enter your password");
        exit();
    } else {
        try {
            $queryGebruikersnaam = $conn->prepare("SELECT gebruikersnaam FROM user WHERE gebruikersnaam = ?");
            $queryGebruikersnaam->execute([$gebruikersnaam]);

            $gebruikersnaamBestaat = $queryGebruikersnaam->rowCount() > 0;
            if ($gebruikersnaamBestaat) {
                header("Location: ../index.php?page=Account&error=The username is already used!");
                exit;
            } else {
                $insertQuery = "INSERT INTO user (gebruikersnaam, voornaam, wachtwoord, registratiedatum) VALUES (:gebruikersnaam, :voornaam, :wachtwoord, :registratiedatum)";
                $stmt = $conn->prepare($insertQuery);
                $stmt->execute([
                    'gebruikersnaam' => $gebruikersnaam,
                    'voornaam' => $voornaam,
                    'wachtwoord' => $wachtwoordHash,
                    'registratiedatum' => $datum
                ]);
                header("Location: ../index.php?page=Login");
                exit();
            }
        } catch (PDOException $foutje) {
            echo "Could not connect to the database: " . $foutje->getMessage();
        }
    }
} else {
    echo "Submit button is not set.";
}
?>