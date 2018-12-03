<!DOCTYPE html>
<html>
<?php session_start(); 
    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/inlogscherm.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
        <div class="container">
            <h1>Log hier in</h1>
            <?php 
                include "db_connection.php";
                $invoer_email = $_POST["email"];
                $sql = "SELECT email, wachtwoord FROM gebruiker WHERE email = '$invoer_email'";
                $data = $conn->query($sql); 
                $aantal = $data->rowCount();
                if($aantal == 0) {
                    echo '<p>' . $invoer_email . ' bestaat niet, probeer het opnieuw.<br>Als u uw emailadres niet meer weet, klik <a href="aanmelden.php">hier</a> om een nieuw account aan te maken.</p>';
                }
                else {
                    foreach ($data as $row)
                    { 
                        if($invoer_email == $row['email']) {
                            $htmlOutput = "";
                            $htmlOutput = $row['wachtwoord'];
                            echo $htmlOutput;
                        }
                    }
                }
            $conn = null;  
        ?>
    </div>
    <?php include "footer.php" ?>
    <script src="Javascript/index.js"></script>
</body>
</html>