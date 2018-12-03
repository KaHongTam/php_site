<!DOCTYPE html>
<html>
    <?php session_start() ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/invoer_product.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin|Julius+Sans+One|Oswald|Roboto|Merriweather" rel="stylesheet">
</head>
<body>
    <?php include "nav.php" ?>
    <form action="get_invoer_product.php" method="post">
    <label for="productnaam">Productnaam</label>
    <input type="text" id="productnaam" name="product_productnaam" autofocus>
    <br>
    <label for="aantal">Aantal</label>
    <input type="number" id="aantal" name="product_aantal">
    <br>
    <label for="prijs">Prijs</label>
    <input type="number" id="prijs" name="product_prijs" step="0.01">
    <br>
    <label for="categorie">Categorie</label>
    <select id="categorie" name="product_categorie">
            <option value="dieren">Dieren</option>
            <option value="natuur">Natuur</option>               
            <option value="urban">Urban</option>
        </optgroup>
</select>
        <br>
    <label for="stijl">Stijl</label><br>
    <select id="stijl" name="product_stijl">
            <option value="foto">Foto</option>
            <option value="schilderij">Schilderij</option>               
            </optgroup>
</select>
        <br>
        <label for="kleur">Kleur</label>
    <select id="kleur" name="product_kleur">
            <option value="blauw">Blauw</option>
            <option value="geel">Geel</option>
            <option value="grijs">Grijs</option>
            <option value="rood">Rood</option>
            <option value="wit">Wit</option>
            <option value="zwart">Zwart</option>
            </optgroup>
</select>
        <br>
        <input type="hidden" name="product_canvas" value="0">
        <input type="hidden" name="product_hout" value="0">
        <input type="hidden" name="product_staal" value="0">
        <input type="hidden" name="product_glas" value="0">
        <input type="checkbox" id="materiaal" name="product_canvas" value="1"><label class="light" for="materiaal">Canvas</label><br>
        <input type="checkbox" id="materiaal" name="product_hout" value="1"><label class="light" for="materiaal">Hout</label><br>
        <input type="checkbox" id="materiaal" name="product_staal" value="1"><label class="light" for="materiaal">Staal</label><br>
        <input type="checkbox" id="materiaal" name="product_glas" value="1"><label class="light" for="materiaal">Glas</label><br>
        <br>
        <label for="product_plaatje">Afbeelding</label>
        <input type="text" id="plaatje" name="product_plaatje">
    <br>
    <button type="submit">Indienen</button>
    </form>
    <script src="JavaScript/product_invoer.js"></script>
    <?php include "footer.php" ?>
</body>
</html>