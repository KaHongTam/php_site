<?php
    session_start();
    include "db_connection.php";

    $wijzigen_voornaam = $_POST["wijzigen_voornaam"];
    $wijzigen_achternaam = $_POST["wijzigen_achternaam"];
    $wijzigen_tussenvoegsel = $_POST["wijzigen_tussenvoegsel"];
    $wijzigen_straatnaam = $_POST["wijzigen_straatnaam"];
    $wijzigen_huisnummer = $_POST["wijzigen_huisnummer"];
    $wijzigen_huisnummer_toevoeging = $_POST["wijzigen_huisnummer_toevoeging"];
    $wijzigen_plaatsnaam = $_POST["wijzigen_plaatsnaam"];
    $wijzigen_postcode = $_POST["wijzigen_postcode"];
    $wijzigen_telefoonnummer = $_POST["wijzigen_telefoonnummer"];
    $wijzigen_email = $_POST["wijzigen_email"];
    $wijzigen_wachtwoord = $_POST["wijzigen_wachtwoord"];
    $gebruiker_id = $_SESSION["gebruiker_id"];

    try {
            $sql = "UPDATE gebruiker SET voornaam = '$wijzigen_voornaam', achternaam = '$wijzigen_achternaam', tussenvoegsel = '$wijzigen_tussenvoegsel', 
            straatnaam = '$wijzigen_straatnaam', huisnummer ='$wijzigen_huisnummer', huisnummer_toevoeging ='$wijzigen_huisnummer_toevoeging', plaatsnaam ='$wijzigen_plaatsnaam', 
            postcode = '$wijzigen_postcode', telefoonnummer = '$wijzigen_telefoonnummer', email = '$wijzigen_email', wachtwoord = '$wijzigen_wachtwoord' WHERE gebruiker_id = '$gebruiker_id'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Gegevens gewijzigd!";
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    $_SESSION["gebruiker_voornaam"] = $wijzigen_voornaam;
    $_SESSION["gebruiker_tussenvoegsel"] = $wijzigen_tussenvoegsel;
    $_SESSION["gebruiker_straatnaam"] = $wijzigen_straatnaam;
    $_SESSION["gebruiker_achternaam"] = $wijzigen_achternaam;
    $_SESSION["gebruiker_huisnummer"] = $wijzigen_huisnummer;
    $_SESSION["gebruiker_huisnummer_toevoeging"] = $wijzigen_huisnummer_toevoeging;
    $_SESSION["gebruiker_plaatsnaam"] = $wijzigen_plaatsnaam;
    $_SESSION["gebruiker_postcode"] = $wijzigen_postcode;
    $_SESSION["gebruiker_telefoonnummer"] = $wijzigen_telefoonnummer;
    $_SESSION["gebruiker_email"] = $wijzigen_email;
    $_SESSION["gebruiker_wachtwoord"] = $wijzigen_wachtwoord;
    header("Location: persoonlijke_pagina.php");  
?>

