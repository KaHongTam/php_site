<?php
    include "db_connection.php";

    $gebruiker_voornaam = $_POST["gebruiker_voornaam"];
    $gebruiker_achternaam = $_POST["gebruiker_achternaam"];
    $gebruiker_tussenvoegsel = $_POST["gebruiker_tussenvoegsel"];
    $gebruiker_straatnaam = $_POST["gebruiker_straatnaam"];
    $gebruiker_huisnummer = $_POST["gebruiker_huisnummer"];
    $gebruiker_huisnummer_toevoeging = $_POST["gebruiker_huisnummer_toevoeging"];
    $gebruiker_plaatsnaam = $_POST["gebruiker_plaatsnaam"];
    $gebruiker_postcode = $_POST["gebruiker_postcode"];
    $gebruiker_telefoonnummer = $_POST["gebruiker_telefoonnummer"];
    $gebruiker_email = $_POST["gebruiker_email"];
    $gebruiker_wachtwoord = $_POST["gebruiker_wachtwoord"];

    try {
            $sql = "INSERT INTO gebruiker (voornaam, achternaam, tussenvoegsel, straatnaam, huisnummer, huisnummer_toevoeging, plaatsnaam, postcode, telefoonnummer, email, wachtwoord)
            VALUES ('$gebruiker_voornaam', '$gebruiker_achternaam', '$gebruiker_tussenvoegsel', '$gebruiker_straatnaam', '$gebruiker_huisnummer', '$gebruiker_huisnummer_toevoeging', '$gebruiker_plaatsnaam', '$gebruiker_postcode', '$gebruiker_telefoonnummer', '$gebruiker_email', '$gebruiker_wachtwoord')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    header("Location: thanks.php");  
?>
