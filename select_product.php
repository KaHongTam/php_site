<?php
    include("db_connection.php");
    $sql = "SELECT * FROM product";
    
    $data = $conn->query($sql);  
    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<div class="item">';
        $htmlOutput .= '<h2>' . $row['productnaam'] . '</h2>';
        $htmlOutput .= '<img src="Images/' . $row['plaatje'] . '" alt ="' . $row['productnaam'] . '" width="320px height="240px">';
        $htmlOutput .= '<p>Aantal ' . $row['aantal'] . "       € " . $row['prijs'] . '</p>';
        // $htmlOutput .= '<p>github link= <a href="' . $row['url_link'] . '">' . $row['url_link'] . '</a></p>';
        // $htmlOutput .= '<p>telefoonnummer: ' . $row['phone'] . '</p>';
        // $htmlOutput .= "<p> email:" . $row['email'] . "</p>";
        $htmlOutput .= "</div>";
        echo $htmlOutput;
    }

?>