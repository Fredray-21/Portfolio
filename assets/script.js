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

