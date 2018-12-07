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
                $htmlOutput  = '';
                $htmlOutput .= '<p>Voornaam:<br><input type="text" value="' .  $gebruiker_naam . '"></p>';
                $htmlOutput .= '<p>Tussenvoegsel:<br><input type="text" value="' .  $_SESSION["gebruiker_tussenvoegsel"] . '"></p>';
                $htmlOutput .= '<p>Achternaam:<br><input type="text" value="' .  $_SESSION["gebruiker_achternaam"] . '"></p>';
                $htmlOutput .= '<p>Straatnaam:<br><input type="text" value="' .  $_SESSION["gebruiker_straatnaam"] . '"></p>';
                $htmlOutput .= '<p>Huisnummer:<br><input type="text" value="' .  $_SESSION["gebruiker_huisnummer"] . '"></p>';
                $htmlOutput .= '<p>Huisnummer toevoeging:<br><input type="text" value="' .  $_SESSION["gebruiker_huisnummertoevoeging"] . '"></p>';
                $htmlOutput .= '<p>Plaatsnaam:<br><input type="text" value="' .  $_SESSION["gebruiker_plaatsnaam"] . '"></p>';
                $htmlOutput .= '<p>Postcode:<br><input type="text" value="' .  $_SESSION["gebruiker_postcode"] . '"></p>';
                $htmlOutput .= '<p>Telefoonnummer:<br><input type="text" value="' .  $_SESSION["gebruiker_telefoonnummer"] . '"></p>';
                $htmlOutput .= '<p>Emailadres:<br><input type="email" value="' .  $_SESSION["gebruiker_email"] . '"></p>';
                $htmlOutput .= '<p>Wachtwoord:<br><input type="password" value="' .  $_SESSION["gebruiker_wachtwoord"] . '"></p>';
                $htmlOutput .= '<p>Herhaling wachtwoord:<br><input type="password"></p>';
                echo $htmlOutput;

            ?>
        </div>
        <div class="rightbar">
            </div>
    </div>
    <?php include 'footer.php' ?>
    </div>
</body>
</html>

