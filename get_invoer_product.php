<?php
    include "db_connection.php";

    $product_productnaam = $_POST["product_productnaam"];
    $product_aantal = $_POST["product_aantal"];
    $product_prijs = $_POST["product_prijs"];
    $product_categorie = $_POST["product_categorie"];
    $product_stijl = $_POST["product_stijl"];
    $product_kleur = $_POST["product_kleur"];
    $product_canvas = $_POST["product_canvas"];
    $product_hout = $_POST["product_hout"];
    $product_staal = $_POST["product_staal"];
    $product_glas = $_POST["product_glas"];
    $product_plaatje = $_POST["product_plaatje"];

    try {
            $sql = "INSERT INTO product (productnaam, aantal, prijs, categorie, stijl, kleur, canvas, hout, staal, glas, plaatje)
            VALUES ('$product_productnaam', '$product_aantal', '$product_prijs', '$product_categorie', '$product_stijl', '$product_kleur', '$product_canvas', '$product_hout', '$product_staal', '$product_glas', '$product_plaatje')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    header("Location: invoer_product.php");  
?>
