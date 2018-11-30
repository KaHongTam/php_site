<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PiKaso.nl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="thanks.css" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Merriweather|Pacifico" rel="stylesheet">
</head>
<body>
    <div class="header">
        <p>PiKaso.nl</p>
    </div>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="leftbar">
            <p>div leftbar</p>
        </div>
        <div class="content">
            <h2>Bedankt voor het inschrijven!</h2>
            <script type="text/javascript">
                var count = 10;
                var redirect = "index.php";
                
                function countDown(){
                    var timer = document.getElementById("timer");
                    if(count > 0){
                        count--;
                        timer.innerHTML = "U wordt over "+count+" seconden terugverwezen.";
                        setTimeout("countDown()", 1000);
                    }else{
                        window.location.href = redirect;
                    }
                }
            </script>
                
            <span id="timer">
            <script type="text/javascript">countDown();</script>
            </span>
        
        </div>
</div>
</body>
</html>