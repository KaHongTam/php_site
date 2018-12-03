<div class="header">
        <p>PiKaso.nl</p>
    </div>
<div class="nav" id="nav">
    <div class="nav_left">
        <?php
            if ($_SESSION["gebruiker_voornaam"] == NULL) {
                $gebruiker_naam = "";
            }
            $adminTest = substr($_SESSION["gebruiker_voornaam"], 0, 2);
            if ($adminTest == 42) {
                $gebruiker_naam = substr($_SESSION["gebruiker_voornaam"], 2);
            }
            else {
                $gebruiker_naam = $_SESSION["gebruiker_voornaam"];
            }
            echo "<div class='nav_gebruiker'><p>Welkom " . $gebruiker_naam . "</p></div>"; 
        ?>
        <div class="nav_left_menu"><a href="index.php" class="nav_menu">Home</a>
        <!-- <a href="aanmelden.php" class="nav_menu">Hoe werkt het?</a> -->
        <a href="shop.php?categorie=Dieren','Natuur','Urban&prijs=2" class="nav_menu">Categorie</a>
        <!-- <a class="nav_menu">Stijl</a> -->
        </div>
    </div>
    <div class="nav_right">
        <?php 
        if ($_SESSION['admin'] == 42) {
            echo "<a href='admin_check.php' class='nav_menu'>Product toevoegen</a>";
            echo "<a href='uitloggen.php' class='nav_menu'>Uitloggen</a>";
            echo "<img src='Images/winkelwagen.jpg' width='50px'>";
            }
        else if ($_SESSION ['admin'] == 1) {
            echo "<a href='uitloggen.php' class='nav_menu'>Uitloggen</a>";
            echo "<img src='Images/winkelwagen.jpg' width='50px'>";
        }
        else {
            echo "<a href='aanmelden.php' class='nav_menu'>Aanmelden</a>";
            echo "<a href='inlogscherm.php' class='nav_menu'>Inloggen</a>";
        }
        ?>
    </div>
</div>