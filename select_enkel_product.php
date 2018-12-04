<?php
    include "db_connection.php";

        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM product WHERE product_id = ('$product_id')";
    $data = $conn->query($sql); 
    foreach ($data as $row)
    {
        $htmlOutput  = '';
        $htmlOutput .= '<h1>' . $row['productnaam'] . '</h1>';
        $htmlOutput .= '<img src="Images/' . $row['plaatje'] . '"width="60%"></div>';
        $htmlOutput .= '<div class="rechts"><p>aantal resterend: ';
        $htmlOutput .= $row['aantal'] . '<br>';
        $htmlOutput .= 'materiaal:<br>';
        $htmlOutput .= '<select name="materiaal">';
        if ($row['canvas'] == 0) {
            $htmlOutput .= '<option id="canvas" value="canvas" disabled>Canvas</option>';
        }
        else {
            $htmlOutput .= '<option id="canvas" value="canvas">Canvas</option>';
        }

        if ($row['hout'] == 0) {
            $htmlOutput .= '<option id="hout" value="hout" disabled>Hout</option>';
        }
        else {
            $htmlOutput .= '<option id="hout" value="hout">Hout</option>';
        }

        if ($row['staal'] == 0) {
            $htmlOutput .= '<option id="staal" value="staal" disabled>Staal</option>';
        }
        else {
            $htmlOutput .= '<option id="staal" value="staal">Staal</option>';
        }

        if ($row['glas'] == 0) {
            $htmlOutput .= '<option id="glas" value="glas" disabled>Glas</option>';
        }
        else {
            $htmlOutput .= '<option id="glas" value="glas">Glas</option>';
        }

        $htmlOutput .= '</select><br><br><br><br><br>prijs: € ' . $row['prijs'] . '</p>';
        $htmlOutput .= '<br><br><button type="submit">Bestellen</button>';
        $htmlOutput .= '</div>';
        echo $htmlOutput;
    }