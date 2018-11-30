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