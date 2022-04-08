var timeoutload = 600;
var title = document.querySelectorAll('.active span')[0].innerHTML;
document.getElementsByClassName("title-loading")[0].innerHTML = title + "...";

setTimeout(() => {
    var text = document.getElementById('textmachine');
    var splitText = text.innerText.split('');
    text.innerHTML = '';
    i = 0
    setInterval(function () {
        AjoutDeLettre()
    }
        , 150);

    function AjoutDeLettre() {
        if (i < splitText.length) {
            text.innerHTML += splitText[i];
            i++;
        }
    }
}, timeoutload);

function goFullscreen(id) {
    var element = document.getElementById(id);
    if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
    }
}

function showhide(button) {
    document.getElementById("div-hidden-" + button.innerHTML.split(" ")[0]).classList.toggle('hidden');

    Array.from(document.getElementsByClassName("linktoggle")).forEach((e) => {
        if (!e.classList.contains("hidden")) {
            e.classList.add("hidden");
        }
    });

    Array.from(document.getElementsByClassName("button-showhide")).forEach((e) => {
        if (e != button) {
            e.innerHTML = e.innerHTML.replace("˅", "&gt;");
            e.innerHTML = e.innerHTML.replace("Fermé", "Voir");
        } else {
            if (button.innerHTML.indexOf("&gt;") > -1) {
                button.innerHTML = button.innerHTML.replace("&gt;", "&#709;");
                button.innerHTML = button.innerHTML.replace("Voir", "Fermé");

            } else {
                button.innerHTML = button.innerHTML.replace("˅", "&gt;");
                button.innerHTML = button.innerHTML.replace("Fermé", "Voir");
            document.getElementById("div-hidden-" + button.innerHTML.split(" ")[0]).classList.remove('hidden');
                
            }
            document.getElementById("div-hidden-" + button.innerHTML.split(" ")[0]).classList.toggle('hidden');
        }
    });
}



function loadPage() {
    setTimeout(() => {
        document.getElementById("container-loading").style.display = "none";
        document.getElementById("container").style.opacity = "1";
        document.getElementById("main").style.display = "block";
    }, timeoutload);
}



function VerifiePass(user, pass) {
    let person = prompt("Please enter your name", "Harry Potter");
    let text;
    if (person == null || person == "") {
        text = "User cancelled the prompt.";
    } else {
        text = "Hello " + person + "! How are you today?";
    }
}