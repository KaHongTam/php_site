<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="aanmelden.css" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Merriweather|Pacifico" rel="stylesheet">
</head>
<body>
    <div class="header">
        <p>PiKaso.nl</p>
    </div>
    <?php include "nav.php" ?>
        <div class="formulier">
            <form action="get_invoer.php" method="post" autocomplete="off">
            <h2>Meld je hier aan</h2>
            <label for="voornaam">Voornaam*</label>
            <input type="text" id="voornaam" name="gebruiker_voornaam" autofocus required>
            <br>
            <label for="achternaam">Achternaam*</label>
            <input type="text" id="achternaam" name="gebruiker_achternaam" required>
            <br>
            <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" id="tussenvoegsel" name="gebruiker_tussenvoegsel">
            <br>
            <label for="straatnaam">Straatnaam*</label>
            <input type="text" id="straatnaam" name="gebruiker_straatnaam" required>
            <br>
            <label for="huisnummer">Huisnummer*</label>
            <input type="number" id="huisnummer" name="gebruiker_huisnummer" required>
            <br>
            <label for="huisnummer_toevoeging">Toevoeging</label>
            <input type="text" id="toevoeging" name="gebruiker_huisnummer_toevoeging">
            <br>
            <label for="plaatsnaam">Plaatsnaam*</label>
            <input type="text" id="plaatsnaam" name="gebruiker_plaatsnaam" required>
            <br>
            <label for="postcode">Postcode* (1234AB)</label>
            <input type="text" id="postcode" name="gebruiker_postcode" pattern="[1-9][0-9]{3}[A-Za-z]{2}" title="Graag vier cijfers met twee letters invullen (1234AB)" required>
            <br>
            <label for="telefoonnummer">Telefoonnummer*</label>
            <input type="text" id="telefoonnummer" name="gebruiker_telefoonnummer" required>
            <br>
            <label for="email">Email adres*</label>
            <input type="email" id="emailadres" name="gebruiker_email" required>
            <br>
                <label for="wachtwoord">Wachtwoord* (minimaal 8 tekens)</label>
            <input type="password" id="wachtwoord" name="gebruiker_wachtwoord" pattern=".{8,}" title="minimaal 8 tekens" required> <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
            <br>
            <p>* = verplicht</p>
            <button type="submit" onclick="controle()">Aanmelden</button>
            </form>
            </div>
        </div>
    </div>
    <div class="footer">
            <a href="https://www.twitter.com/kahongtam1" target="_blank"><img src="Images\social_twitter.png"></a>
            <a href="https://www.facebook.com/kahongtam" target="_blank"><img src="Images\social_facebook3.png"></a>
            <a href="mailto:kahongtam@hotmail.com" target="_blank"><img src="Images\social_email.png"></a>
        </div>
        <div class="end"></div>
    <script src="aanmelden.js"></script>
</body>
</html>