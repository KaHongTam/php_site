<?php 
    session_start();
    if ($_SESSION['admin'] != "42"){
        echo "U bent niet ingelogd als admin. Klik <a href='inlogscherm.php'>hier</a> om opnieuw in te loggen.";
    }

    else {
        header("location: invoer_product.php");  
    }
?>