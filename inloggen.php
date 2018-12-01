<?php 
   session_start();
   include "db_connection.php";

   $gebruiker_email = $_POST["email"];
   $sql = "SELECT voornaam, achternaam, tussenvoegsel, email FROM gebruiker WHERE email = '$gebruiker_email'";
   $data = $conn->query($sql); 
   $aantal = $data->rowCount();
   if($aantal == 0) 
   {
    echo "Email adres bestaat niet, probeer opnieuw";
    }
    else {
        foreach ($data as $row)
        { 
         $_SESSION["gebruiker_voornaam"] = $row['voornaam'];
         $_SESSION["gebruiker_achternaam"] = $row['achternaam'];
         $_SESSION["gebruiker_tussenvoegsel"] = $row['tussenvoegsel'];
         $_SESSION["gebruik_email"] = $row['email'];
         $adminTest = substr($_SESSION["gebruiker_voornaam"], 0, 2);
     
         if ($adminTest == "42") {
             $gebruiker_naam = substr($_SESSION["gebruiker_voornaam"], 2);
             $htmlOutput = "";
             $htmlOutput = "Hallo " . $gebruiker_naam . " " . $_SESSION["gebruiker_tussenvoegsel"] . " " . $_SESSION["gebruiker_achternaam"] . "<br>";
             echo $htmlOutput;
        }
        else {
             $htmlOutput = "";
             $htmlOutput = "you are not an admin";
             echo $htmlOutput;
        }
     }
    }
?>