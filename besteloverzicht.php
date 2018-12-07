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
            <h1> Overzicht van bestelnummer 2: </h1><br>
            <?php
                include "db_connection.php";

                $gebruiker_id = $_SESSION["gebruiker_id"];
                $sql = "SELECT * FROM bestelling INNER JOIN product on bestelling.product_id=product.product_id WHERE gebruiker_id = '$gebruiker_id' && bestelnummer = 2";
                $data = $conn->query($sql);

                foreach ($data as $row)
                    {   
                        $htmlOutput  = "";
                        $htmlOutput .= '<p>Product: ' . $row['productnaam'] . '<br>';
                        $htmlOutput .= 'Materiaal: ' . $row['materiaal'] . '<br>';
                        $htmlOutput .= 'Prijs: € ' . $row['prijs'] . '</p>';
                        echo $htmlOutput;
                    }
            ?>
        </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <script src="Javascript/overzicht.js"></script>
</body>
</html>
