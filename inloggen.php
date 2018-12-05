<?php 
   session_start();
   include "db_connection.php";

   $invoer_email = $_POST["email"];
   $invoer_wachtwoord = $_POST['wachtwoord'];
   $sql = "SELECT gebruiker_id, voornaam, achternaam, tussenvoegsel, email, wachtwoord FROM gebruiker WHERE email = '$invoer_email'";
   $data = $conn->query($sql); 
   $aantal = $data->rowCount();
   if($aantal == 0) {
    echo "Email adres bestaat niet, probeer opnieuw";
    }
    else {
        foreach ($data as $row)
        {
         $_SESSION["gebruiker_id"] = $row['gebruiker_id'];
         $_SESSION["gebruiker_voornaam"] = $row['voornaam'];
         $_SESSION["gebruiker_achternaam"] = $row['achternaam'];
         $_SESSION["gebruiker_tussenvoegsel"] = $row['tussenvoegsel'];
         $_SESSION["gebruiker_email"] = $row['email'];
         $_SESSION["gebruiker_wachtwoord"] = $row['wachtwoord'];

        if ($invoer_wachtwoord == $_SESSION["gebruiker_wachtwoord"]) {
            $adminTest = substr($_SESSION["gebruiker_voornaam"], 0, 2);
        
            if ($adminTest == "42") {
                $gebruiker_naam = substr($_SESSION["gebruiker_voornaam"], 2);
                $htmlOutput = "";
                $htmlOutput = "Hallo " . $gebruiker_naam . " " . $_SESSION["gebruiker_tussenvoegsel"] . " " . $_SESSION["gebruiker_achternaam"]
                 . "<br> Admin User. <a href='index.php'>Terug naar home als admin</a>";
                echo $htmlOutput;
                $_SESSION['admin'] = "42";
                echo $_SESSION['admin'];
                header("Location: index.php");
            }
            else {
                $htmlOutput = "";
                $htmlOutput = "Hallo " . $_SESSION["gebruiker_voornaam"] . " " . $_SESSION["gebruiker_tussenvoegsel"] . " " . $_SESSION["gebruiker_achternaam"]
                 . "<br> <a href='index.php'>Terug naar home als gebruiker</a>";
                echo $htmlOutput;
                $_SESSION['admin'] = "1";
                header("Location: index.php");
            }
        }
        else {
            echo "gebruikersnaam en wachtwoord komen niet overeen. Probeer opnieuw";
        }
    }
}
$conn = null;  
?>