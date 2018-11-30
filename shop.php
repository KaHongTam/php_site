<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/shop.css" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Merriweather|Pacifico" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
        <form action="" method="get">
            <div class="orderMenu">
                <div class="orderCategorie">
                    Categorie:
                    <input type="radio" name="categorie" value="Dieren" checked> Dieren
                    <input type="radio" name="categorie" value="Natuur"> Natuur
                    <input type="radio" name="categorie" value="Urban"> Urban
                </div>
                <div class="orderPrijs">
                    Prijs:
                    <input type="radio" name="prijs" value="1" checked> Oplopend
                    <input type="radio" name="prijs" value="0" /> Aflopend
                </div>
                <div class="orderSubmit">
                    <button type="submit">sorteer</button>
                    <a href="shop.php?prijs=2">alles tonen</a>
                </div>
  </form>
            </div>
            <div class="smallWrapper">
                <?php
                    include "select_product.php"
                ?>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/shop.js"></script>
</body>
</html>