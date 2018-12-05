<!DOCTYPE html>
<html>
    <?php session_start();
    $_SESSION['admin'] = 0;
    $_SESSION["gebruiker_voornaam"] = "";
    $_SESSION['counter'] = 0;
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/thanks.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php 
        include "nav.php";
    ?>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
            <h2>U bent nu uitgelogd.</h2>
            <span id="timer">
            </span>
            <script src="JavaScript/timer.js"></script>
        </div>
</div>
    <?php include "footer.php" ?>
</body>
</html>