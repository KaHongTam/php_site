<?php
    include "db_connection.php";

        $product_categorie = $_GET['categorie'];
        $sql = "SELECT product_id, productnaam, plaatje, aantal, prijs FROM product WHERE categorie IN ('$product_categorie') ORDER BY prijs ".($_GET['prijs']=="1"?"ASC":"DESC");
    $data = $conn->query($sql); 
    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<a href="product.php?product_id=' . $row['product_id']. '"><div class="item"><h2>' . $row['productnaam'] . '</h2>' .  '<img src="Images/' . $row['plaatje']
         . '" alt ="' . $row['productnaam'] . '" width="320px height="240px">' . '<p>€ ' . $row['prijs'] . '</p>' . '</div></a>';
        echo $htmlOutput;
        $_SESSION['product_id'] = $row['product_id'];
    }
?>