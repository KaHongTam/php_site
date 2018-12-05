<?php
    include "db_connection.php";

        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $data = $conn->query($sql); 
        foreach ($data as $row)
        {
            $htmlOutput  = '';
            $htmlOutput .= '<h1>' . $row['productnaam'] . '</h1>';
            $htmlOutput .= '<img src="Images/' . $row['plaatje'] . '"width="60%"></div>';
            $htmlOutput .= '<div class="rechts"><p>aantal resterend: ';
            $htmlOutput .= $row['aantal'] . '<br>';
            $htmlOutput .= 'materiaal:<br>';