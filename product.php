<!DOCTYPE html>
<html>
<?php session_start();
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/shop.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
            </div>
            <div class="smallWrapper">
                <?php
                    include "select_enkel_product.php"
                ?>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/shop.js"></script>
</body>
</html>