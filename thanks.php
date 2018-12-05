<!DOCTYPE html>
<html>
    <?php session_start();
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
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
            <h2>Bedankt voor het inschrijven!</h2>
            <span id="timer">
            </span>
            <script src="JavaScript/timer.js"></script>
        </div>
</div>
    <?php include "Javascript/footer.php" ?>
</body>
</html>