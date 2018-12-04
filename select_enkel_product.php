<?php
    include "db_connection.php";

        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM product WHERE product_id = ('$product_id')";
    $data = $conn->query($sql); 
    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<div class="item">' . '<h2>' . $row['productnaam'] . '</h2>' .  '<img src="Images/' . $row['plaatje']
         . '" alt ="' . $row['productnaam'] . '" width="320px height="240px">' . '<p>Aantal ' . $row['aantal'] . " € " . $row['prijs'] . '</p>' . '</div>';
        echo $htmlOutput;
    }

?>