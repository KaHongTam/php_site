<!DOCTYPE html>
<html>
<?php session_start();
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/product.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
        </div>
            <div class="productspecificatie">
                <div class="links">
                <?php
                    include "db_connection.php";
                    
                    $winkelwagen_gebruiker_id = $_SESSION["gebruiker_id"];
                    $winkelwagen_product_id = $_SESSION['product_id'];
                    $winkelwagen_aantal = 1;
                    $winkelwagen_materiaal = $_POST['materiaal'];
                    $winkelwagen_prijs = $_SESSION['prijs'];
                    
                    try {
                        $sql = "INSERT INTO bestelling (gebruiker_id, product_id, aantal, materiaal, prijs, bestelnummer)
                        VALUES ('$winkelwagen_gebruiker_id', '$winkelwagen_product_id', '$winkelwagen_aantal', '$winkelwagen_materiaal', '$winkelwagen_prijs', 0)";
                        // use exec() because no results are returned
                        $conn->exec($sql);
                        echo '<p>Dit item is nu toegevoegd in uw winkelwagen. Klik <a href="shop.php?categorie=Dieren%27,%27Natuur%27,%27Urban&prijs=2">hier</a> om verder te winkelen of op de winkelwagen om af te rekenen.</p>';
                    }
                catch(PDOException $e)
                    {
                        echo $sql . "<br>" . $e->getMessage();
                    }
                $conn = null;
                ?>
        </div>
    </div>
</div>
    </form>
    <?php include "footer.php" ?>
    <script src="JavaScript/shop.js"></script>
</body>
</html>