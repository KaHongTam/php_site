<!DOCTYPE html>
<html>
<?php session_start();
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKasso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/index.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
        </div>
        <div class="content">
            <?php
                include "db_connection.php";
                $gebruiker_id = $_SESSION["gebruiker_id"];
                $bestelnummer = $_SESSION['maxbestelnummer'];
                $sql = "SELECT bestelling.gebruiker_id, bestelling.aantal, bestelling.prijs, bestelling.materiaal, product.productnaam, bestelling.bestelnummer
                FROM bestelling INNER JOIN product on bestelling.product_id=product.product_id WHERE gebruiker_id = '$gebruiker_id' AND bestelnummer = 0";
                $data = $conn->query($sql);
                $totaalprijs = 0;
            
                        $sql = "UPDATE bestelling SET bestelnummer = '$bestelnummer' WHERE gebruiker_id = '$gebruiker_id' AND bestelnummer = 0";
                        // use exec() because no results are returned
                        $conn->exec($sql);
                $conn = null;  
                echo "<h1>bedankt voor uw bestelling!</h1>";
            ?>
        </div>
    <?php include 'footer.php' ?>
    </div>
</body>
</html>



