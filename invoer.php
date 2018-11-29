<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="invoer.css" />
    <script src="invoer.js"></script>
</head>
<body>
    <form action="get_invoer.php" method="post">
    <legend>Gebruikersinfo</legend>
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
    <input type="text" id="tussenvoegsel" name="gebruiker_huisnummer_toevoeging">
    <br>
    <label for="plaatsnaam">Plaatsnaam*</label>
    <input type="text" id="plaatsnaam" name="gebruiker_plaatsnaam" required>
    <br>
    <label for="postcode">Postcode*</label>
    <input type="text" id="postcode" name="gebruiker_postcode" required>
    <br>
    <label for="telefoonnummer">Telefoonnummer*</label>
    <input type="text" id="telefoonnummer" name="gebruiker_telefoonnummer" required>
    <br>
    <label for="email">Email adres*</label>
    <input type="email" id="emailadres" name="gebruiker_email" required>
    <br>
        <label for="wachtwoord">Wachtwoord*</label>
    <input type="password" id="wachtwoord" name="gebruiker_wachtwoord" required>
    <br>
    <br>
    <br>
    <p>* = verplicht</p>
    <button type="submit">Aanmelden</button>
    </form>
    
</body>
</html>