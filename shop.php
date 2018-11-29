<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shop.css" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Merriweather|Pacifico" rel="stylesheet">
</head>
<body>
    <div class="header">
        <p>PiKaso.nl</p>
    </div>
    <div class="nav" id="nav">
        <a href="index.php" class="nav_menu">Home</a>
        <a href="aanmelden.php" class="nav_menu">Hoe werkt het?</a>
        <a href="shop.php?prijs=2" class="nav_menu">Categorie</a>
        <a class="nav_menu">Stijl</a>
        <div class="nav_right">
            <a href="aanmelden.php" class="nav_menu">Aanmelden</a>
            <a href="inloggen.php" class="nav_menu">Inloggen</a>
            <img src="Images/winkelwagen.jpg" width="50px">
        </div>
    </div>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
            <div class="orderMenu">
            <form action="" method="get">
                <div class="orderPrijs">
                    Prijs:
                    <input type="radio" name="prijs" value="1" checked> Oplopend
                    <input type="radio" name="prijs" value="0" /> Aflopend
                </div>
                <div class="orderCategorie">
                    <input type="radio" name="categorie" value="Dieren" checked> Dieren
                    <input type="radio" name="categorie" value="Natuur"> Natuur
                    <input type="radio" name="categorie" value="Urban"> Urban
                </div>
                <div><button type="submit">Sorteer</button></div>
  </form>
            </div>
            <div class="smallWrapper">
                <?php
                    include "select_test.php"
                ?>
            </div>
        </div>
    </div>
        <div class="footer">
            <a href="https://www.twitter.com/kahongtam1" target="_blank"><img src="Images\social_twitter.png"></a>
            <a href="https://www.facebook.com/kahongtam" target="_blank"><img src="Images\social_facebook3.png"></a>
            <a href="mailto:kahongtam@hotmail.com" target="_blank"><img src="Images\social_email.png"></a>
        </div>
        <div class="end"></div>

    <script src="shop.js"></script>
</body>
</html>