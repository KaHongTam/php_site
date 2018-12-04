// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function controle() {
  var wachtwoord = document.getElementById('wachtwoord').value;
  var wachtwoord1 = document.getElementById('wachtwoordherhaling').value;
  if (wachtwoord1.length == 0) {
    document.getElementById("wachtwoordherhaling").style.backgroundColor = "#ffffff1a";
    document.getElementById("labelwachtwoordherhaling").innerHTML = "Herhaal uw wachtwoord*";
    document.getElementById("wachtwoordherhaling").style.boxShadow = "4px 4px #3b3c5cbd";
    document.getElementById("formbutton").disabled = false;
    document.getElementById("formbutton").style.backgroundColor = "#5e717b";
    }
  else if (wachtwoord != wachtwoord1) {
    document.getElementById("wachtwoordherhaling").style.backgroundColor = "#ff000065";
    document.getElementById("labelwachtwoordherhaling").innerHTML = "Wachtwoord komt niet overeen";
    document.getElementById("wachtwoordherhaling").style.boxShadow = "4px 4px #ff00009f";
    document.getElementById("formbutton").disabled = true
    document.getElementById("formbutton").style.backgroundColor = "#ff000065";
    }
  else if (wachtwoord == wachtwoord1) {
    document.getElementById("wachtwoordherhaling").style.backgroundColor = "#51ff0065";
    document.getElementById("labelwachtwoordherhaling").innerHTML = "Wachtwoord komt overeen";
    document.getElementById("wachtwoordherhaling").style.boxShadow = "4px 4px #51ff009f";
    document.getElementById("formbutton").disabled = false;
    document.getElementById("formbutton").style.backgroundColor = "#5e717b";
    }
  }
