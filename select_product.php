<?php
    include "db_connection.php";

        $product_categorie = $_GET['categorie'];
        $sql = "SELECT productnaam, plaatje, aantal, prijs FROM product WHERE categorie = '$product_categorie' ORDER BY prijs ".($_GET['prijs']=="1"?"ASC":"DESC");
    $data = $conn->query($sql); 
    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<div class="item">' . '<h2>' . $row['productnaam'] . '</h2>' .  '<img src="Images/' . $row['plaatje']
         . '" alt ="' . $row['productnaam'] . '" width="320px height="240px">' . '<p>Aantal ' . $row['aantal'] . " € " . $row['prijs'] . '</p>' . "</div>";
        echo $htmlOutput;
    }

?>