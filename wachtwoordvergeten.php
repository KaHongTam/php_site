<!DOCTYPE html>
<html>
<?php session_start(); 
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/inlogscherm.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
<?php include "nav.php" ?>
    <div class="container">
        <h1>Log hier in</h1>
        <form action="wachtwoordweergeven.php" method="post" autocomplete="off">
            Emailadres:
            <input type="email" name="email" autofocus required>
            <button type="submit">Aanvragen</button>
            <p>Nog geen account? Klik dan <a href="aanmelden.php" title="Klik hier om uw wachtwoord op te vragen">hier</a>.</p>
        </form>
        </div>
    <?php include "footer.php" ?>
    <script src="Javascript/index.js"></script>
</body>
</html>