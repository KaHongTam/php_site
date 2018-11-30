<?php
    include "db_connection.php";

    $product_oplopend = $_GET['prijs'];

    if ($product_oplopend == "1") {
        $product_categorie = $_GET['categorie'];
        $sql = "SELECT productnaam, plaatje, aantal, prijs FROM product WHERE categorie = '$product_categorie' ORDER BY prijs ASC";
    }
        else if ($product_oplopend == "0") {
            $product_categorie = $_GET['categorie'];
            $sql = "SELECT productnaam, plaatje, aantal, prijs FROM product WHERE categorie = '$product_categorie' ORDER BY prijs DESC";
        } 
        else {
            $sql = "SELECT productnaam, plaatje, aantal, prijs FROM product";
        }

    $data = $conn->query($sql); 
    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<div class="item">';
        $htmlOutput .= '<h2>' . $row['productnaam'] . '</h2>';
        $htmlOutput .= '<img src="Images/' . $row['plaatje'] . '" alt ="' . $row['productnaam'] . '" width="320px height="240px">';
        $htmlOutput .= '<p>Aantal ' . $row['aantal'] . " € " . $row['prijs'] . '</p>';
        $htmlOutput .= "</div>";
        echo $htmlOutput;
    }

?>