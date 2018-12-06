<!DOCTYPE html>
<html>
<?php session_start();
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/overzicht.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
        </div>
        <div class="content">
            <form action="betalen.php" method="post" autocomplete="off">
            <h1> Overzicht bestelling </h1><br>
            <?php include 'select_overzicht.php' ?>
        </div>
            </form>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <script src="Javascript/overzicht.js"></script>
</body>
</html>
