<?php
    include "db_connection.php";
    
    $gebruiker_id = $_SESSION["gebruiker_id"];
    $sql = "SELECT bestelling.bestelling_id, bestelling.gebruiker_id, bestelling.aantal, bestelling.prijs, bestelling.materiaal, bestelling.bestelnummer, product.productnaam, product.plaatje
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
            $htmlOutput .= '<div class="productregel"><div class="previewplaatje"><figure><img src="Images/' . $row['plaatje'] . '" height="240px" width = "320px"><figcaption>' . $row['productnaam'] . 
            '</figcaption></figure></div><div class="stukje_tekst"><p>Prijs: € ' . $row['prijs'] . '</p>';
            $htmlOutput .= '<p>Materiaal: ' . $row['materiaal'] . '</p>';
            $htmlOutput .= '<a href="verwijderbestelling.php?id=' . $row['bestelling_id'] . '">verwijderen</a>';
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