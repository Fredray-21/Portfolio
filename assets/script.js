// Start random color in Title
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}
var text = document.getElementById("Title").textContent;
var randomLettre = getRandomInt(text.length);
var lettreColor = "<span class='text-green-600'>" + text[randomLettre] + "</span>";
var Title = "";
for (let index = 0; index < text.length; index++) {
    if (index == randomLettre) {
        Title = Title + lettreColor;
    } else {
        Title = Title + text[index];
    }
}
document.getElementById("Title").innerHTML = Title;
// End random color in Title

function goFullscreen(id) {
    var element = document.getElementById(id);
    if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
    }
}


function nbrCara(cara, nbrcara) {
    var nombre = document.getElementById(cara).value.length;
    document.getElementById(nbrcara).innerHTML = nombre;
}

function compteur() {
    var nombre = document.getElementById("textareaMessage").value.length;
    document.getElementById("compteur").innerHTML = nombre;
}



