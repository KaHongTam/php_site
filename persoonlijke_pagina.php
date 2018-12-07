<!DOCTYPE html>
<html>
<?php session_start();
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/persoonlijke_pagina.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
        </div>
        <div class="content">
            <?php 
                include "db_connection.php";

                if ($_SESSION["gebruiker_voornaam"] == NULL) {
                    $gebruiker_naam = "";
                }
                $adminTest = substr($_SESSION["gebruiker_voornaam"], 0, 2);
                if ($adminTest == 42) {
                    $gebruiker_naam = substr($_SESSION["gebruiker_voornaam"], 2);
                }
                else {
                    $gebruiker_naam = $_SESSION["gebruiker_voornaam"];
                }
                echo '<h1>Persoonlijke pagina: </h1>';
                echo '<form action="wijzigen_persoonlijke_pagina.php" method="post" autocomplete=off>';
                $htmlOutput  = '';
                $htmlOutput .= '<p>Voornaam:*<br><input type="text" value="' .  $gebruiker_naam . '" name="wijzigen_voornaam" required autofocus></p>';
                $htmlOutput .= '<p>Tussenvoegsel:<br><input type="text" value="' .  $_SESSION["gebruiker_tussenvoegsel"] . '" name="wijzigen_tussenvoegsel"></p>';
                $htmlOutput .= '<p>Achternaam:*<br><input type="text" value="' .  $_SESSION["gebruiker_achternaam"] . '" name="wijzigen_achternaam" required></p>';
                $htmlOutput .= '<p>Straatnaam:*<br><input type="text" value="' .  $_SESSION["gebruiker_straatnaam"] . '" name="wijzigen_straatnaam" required></p>';
                $htmlOutput .= '<p>Huisnummer:*<br><input type="text" id="huisnummer" value="' .  $_SESSION["gebruiker_huisnummer"] . '" name="wijzigen_huisnummer" required></p>';
                $htmlOutput .= '<p>Huisnummer toevoeging:<br><input type="text" id="huisnummer_toevoeging" value="' .  $_SESSION["gebruiker_huisnummertoevoeging"] . '" name="wijzigen_huisnummer_toevoeging"></p>';
                $htmlOutput .= '<p>Plaatsnaam:*<br><input type="text" value="' .  $_SESSION["gebruiker_plaatsnaam"] . '" name="wijzigen_plaatsnaam" required></p>';
                $htmlOutput .= '<p>Postcode:*<br><input type="text" value="' .  $_SESSION["gebruiker_postcode"] . '" name="wijzigen_postcode" required></p>';
                $htmlOutput .= '<p>Telefoonnummer:*<br><input type="text" value="' .  $_SESSION["gebruiker_telefoonnummer"] . '" name="wijzigen_telefoonnummer" required></p>';
                $htmlOutput .= '<p>Emailadres:*<br><input type="email" value="' .  $_SESSION["gebruiker_email"] . '" name="wijzigen_email" required></p>';
                $htmlOutput .= '<p><label for="wachtwoord">Wachtwoord:* (minimaal 8 tekens)</label><br><input type="password" id="wachtwoord" pattern=".{8,}" title="minimaal 8 tekens" required value="' .  $_SESSION["gebruiker_wachtwoord"] . '" name="wijzigen_wachtwoord" required></p>';
                $htmlOutput .= '<p><label id="labelwachtwoordherhaling" for="wachtwoordherhaling">Herhaal uw wachtwoord:*</label><br><input type="password" id="wachtwoordherhaling" onkeyup="controle()" required></p>';
                $htmlOutput .= '<button id="formbutton" type="submit">Wijzigen</button>';
                echo $htmlOutput;
                echo '</form>';

            ?>
        </div>
        <div class="rightbar">
            </div>
    </div>
    <?php include 'footer.php' ?>
    </div>
</body>
<script src="Javascript/aanmelden.js"></script>
</html>

