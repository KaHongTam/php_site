<?php
    include "db_connection.php";
    
    $gebruiker_id = $_SESSION["gebruiker_id"];
    $sql = "SELECT bestelling.bestelling_id, bestelling.gebruiker_id, bestelling.aantal, bestelling.prijs, bestelling.materiaal, product.productnaam, bestelling.bestelnummer
    FROM bestelling INNER JOIN product on bestelling.product_id=product.product_id WHERE gebruiker_id = '$gebruiker_id' AND bestelnummer = 0";
    $data = $conn->query($sql);

    if(isset($_POST['delete'])) {
        include "verwijderbestelling.php";
    }
    else {
        $totaalprijs = 0;
        
        foreach ($data as $row)
        {   
            $htmlOutput  = "";
            $htmlOutput .= '&nbsp&nbsp&nbsp&nbsp&nbsp' . $row['aantal'] . ',&nbsp&nbsp&nbsp&nbsp&nbsp' .  $row['productnaam']. ' , € ' . $row['prijs'] . ' materiaal ' . $row['materiaal'];
            $htmlOutput .= '<a href="verwijderbestelling.php?id=' . $row['bestelling_id'] . '">verwijderen</a>' . '<br><br><br>';
            echo $htmlOutput;
            $totaalprijs = $totaalprijs + $row['prijs'];
            $_SESSION['bestelnummer'] = $row['bestelnummer'];
        }

        $sql = "SELECT MAX(bestelnummer) as maxbestelnummer FROM bestelling WHERE gebruiker_id = $gebruiker_id";
        $data = $conn->query($sql);
        foreach ($data as $row) {
            $_SESSION['maxbestelnummer'] = $row['maxbestelnummer'];
        }

        echo "Dit is uw laatste bestelnummer: " . $_SESSION['maxbestelnummer'] . "<br>";
        $maxbestelnummer = $_SESSION['maxbestelnummer'];
        $maxbestelnummer++;
        $_SESSION['maxbestelnummer'] = $maxbestelnummer;
        echo "Dit wordt bestelnummer: " . $maxbestelnummer;
        echo "Totaalprijs: " . $totaalprijs;
    }
?>