<?php
    include "db_connection.php";
    
    $gebruiker_id = $_SESSION["gebruiker_id"];
    $sql = "SELECT bestelling.bestelling_id, bestelling.gebruiker_id, bestelling.aantal, bestelling.prijs, bestelling.materiaal, 
    bestelling.bestelnummer, product.productnaam, product.plaatje, product.canvas, product.hout, product.staal, product.glas
    FROM bestelling INNER JOIN product on bestelling.product_id=product.product_id WHERE gebruiker_id = '$gebruiker_id' AND bestelnummer = 0";
    $data = $conn->query($sql);

    if(isset($_POST['delete'])) {
        include "verwijderbestelling.php";
    }
    else {
        $totaalprijs = 0;
        
        foreach ($data as $row)
        {   
            $totaalprijs = $totaalprijs + $row['prijs'];
            $htmlOutput  = "";
            $htmlOutput .= '<div class="productregel"><div class="previewplaatje"><figure><img src="Images/' . $row['plaatje'] . '" height="240px" width = "320px" 
            </figure></div><div class="stukje_tekst"><h2>' . $row['productnaam'] . 
            '</h2><p>Prijs: € ' . $row['prijs'] . '</p>'; 
            $htmlOutput .= '<p>Materiaal:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            $htmlOutput .= '<select name="materiaal" id="materiaal">';
            if ($row['canvas'] == 0) {
                $htmlOutput .= '<option id="canvas" value="canvas" disabled>Canvas</option>';
            }
            else {
                $htmlOutput .= '<option id="canvas" value="canvas"';
                if ($row['materiaal'] == 'canvas') {
                    $htmlOutput .= 'selected';
                }
                $htmlOutput .= '>Canvas</option>';
            }

            if ($row['hout'] == 0) {
                $htmlOutput .= '<option id="hout" value="hout" disabled>Hout</option>';
            }
            else {
                $htmlOutput .= '<option id="hout" value="hout"';
                if ($row['materiaal'] == 'hout') {
                    $htmlOutput .= 'selected';
                }
                $htmlOutput .= '>Hout</option>';
            }

            if ($row['staal'] == 0) {
                $htmlOutput .= '<option id="staal" value="staal" disabled>Staal</option>';
            }
            else {
                $htmlOutput .= '<option id="staal" value="staal"';
                if ($row['materiaal'] == 'staal') {
                    $htmlOutput .= ' selected';
                }
                $htmlOutput .= '>Staal</option>';
            }

            if ($row['glas'] == 0) {
                $htmlOutput .= '<option id="glas" value="glas" disabled>Glas</option>';
            }
            else {
                $htmlOutput .= '<option id="glas" value="glas"';
                if ($row['materiaal'] == 'glas') {
                    $htmlOutput .= ' selected';
                }
                $htmlOutput .= '>Glas</option>';
            }

            $htmlOutput .= '</select></p>';
            $htmlOutput .= '<p><a href="verwijderbestelling.php?id=' . $row['bestelling_id'] . '">verwijderen?<img src="Images/removerdcart.png" width="40px" height="40px"></a></p>';
            $htmlOutput .= '</div></div>';
            echo $htmlOutput;
        }

        $sql = "SELECT MAX(bestelnummer) as maxbestelnummer FROM bestelling WHERE gebruiker_id = $gebruiker_id";
        $data = $conn->query($sql);
        foreach ($data as $row) {
            $_SESSION['maxbestelnummer'] = $row['maxbestelnummer'];
        }
        $maxbestelnummer = $_SESSION['maxbestelnummer'];
        $maxbestelnummer++;
        $_SESSION['maxbestelnummer'] = $maxbestelnummer;

        echo '<div class="totaalprijs"><h2>Totaalprijs: ' . $totaalprijs . '</h2>';
        echo '<br><button type="submit" name="bestellen">bestellen</button></div>';
    }
?>