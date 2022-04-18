<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Dabadie - Frédéric</title>

    <meta property="og:title" content="Portefolio - Dabadie - Frédéric">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Portefolio. Sur ce site vous pouvez trouver les compétences que j'ai acquise au cours de mes formations, les différents projets que j'ai réalisé au sein de mon BTS ainsi que des réalisations personnelles. Bonne visite !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="https://frederic-dabadie.inovaperf.me/">
    <meta property="og:site_name" content="https://frederic-dabadie.inovaperf.me/">
    <meta property="og:image" content="https://frederic-dabadie.inovaperf.me/assets/profil-picture.jpeg">
    <meta property="og:image:secure_url" content="https://frederic-dabadie.inovaperf.me/assets/profil-picture.jpeg">

    <meta name="theme-color" content="#575fcf">
    <meta name="apple-mobile-web-app-status-bar-style" content="#575fcf">
    <meta name="msapplication-navbutton-color" content="#575fcf">

    <!-- Style CSS & ICON Fontawesome -->
    <link href="../assets/styles.css" rel="stylesheet">
    <link href="../assets/loader.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" href="../assets/profil-picture.jpeg">

</head>

<body onload="loadPage()">
    <div id="container-loading">
        <div class="title-loading"></div>
        <div class="progress">
            <div class="progress-value"></div>
        </div>
    </div>
    <div id="container" style="opacity: 0;">
        <section id="nav">
            <img id="img-pp" src="../assets/profil-picture.jpeg" alt="..." />
            <h1>Frédéric Dabadie</h1>

            <div id="row-social">
                <a href="https://fr.linkedin.com/in/fr%C3%A9d%C3%A9ric-dabadie-01787b203" target="_blank" title="Mon Linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Fredray-21" target="_blank"><i class="fab fa-github" title="Mon GitHub"></i></a>
            </div>
            <div class="separator-nav"></div>
            <div id="start">
                <div id="list-link-nav">
                    <div class="element ">
                        <a href="../index.html"><i class="fas fa-home"></i><span>Accueil</span></a>
                    </div>
                    <div class="element ">
                        <a href="./presentation.html"><i class="fas fa-user"></i><span>Présentation</span></a>
                    </div>
                    <div class="element">
                        <a href="./formation.html"><i class="fas fa-book"></i><span>Formation</span></a>
                    </div>
                    <div class="element">
                        <a href="./competences.html"><i class="fas fa-chart-bar"></i><span>Compétences</span></a>
                    </div>
                    <div class="element">
                        <a href="./experience.php"><i class="fas fa-code"></i><span>Expériences</span></a>
                    </div>
                    <div class="element">
                        <a href="./veille.html"><i class="fas fa-book"></i><span>Veille Techno</span></a>
                    </div>
                    <div class="element active">
                        <a href="./contact.php"><i class="fas fa-phone-alt"></i><span>Contact</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="nav-tel">
            <div id="list-link-nav">
                <div class="element ">
                    <a href="../index.html"><i class="fas fa-home"></i><span>Accueil</span></a>
                </div>
                <div class="element ">
                    <a href="./presentation.html"><i class="fas fa-user"></i><span>Présentation</span></a>
                </div>
                <div class="element ">
                    <a href="./formation.html"><i class="fas fa-book"></i><span>Formation</span></a>
                </div>
                <div class="element">
                    <a href="./competences.html"><i class="fas fa-chart-bar"></i><span>Compétences</span></a>
                </div>
                <div class="element ">
                    <a href="./experience.php"><i class="fas fa-code"></i><span>Expériences</span></a>
                </div>
                <div class="element active">
                    <a href="./contact.php"><i class="fas fa-phone-alt"></i><span>Contact</span></a>
                </div>
            </div>
        </section>


        <section id="main" style="display: none;">
            <h1><i class="fas fa-phone-alt"></i> <span id="textmachine">Me Contacter</span></h1>
            <div class="console">
                <div id="button-top">
                    <div id="button-red" class="button-console"></div>
                    <div id="button-orange" class="button-console"></div>
                    <div id="button-green" class="button-console"></div>
                </div>

                <div id="ListLineConsole">
                    <p style="margin-bottom:0;" id="lineConsole1"><span><span class="text-green">Computer:</span>
                            <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span>$
                        tree
                    </p>
                    <span>.</span><br>
                    <span>|_____ Mon Mail: <a class="text-orange" href="mailto:contact@frederic-dabadie.fr">contact@frederic-dabadie.fr</a></span><br>
                    <span>|_____ Mon <a class="text-orange" target="_blank" href="https://www.linkedin.com/in/fr%C3%A9d%C3%A9ric-dabadie-01787b203/">Linkedin</a></span>
                    <br>
                    <form action="" method="POST">
                        <p style="margin-bottom:0;" id="lineConsole1"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span><span class="text-orange">Nom:</span>$ <input type="text" name="inputName" required>
                        </p>
                        <p style="margin-bottom:0;" id="lineConsole2"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span><span class="text-orange">Prénom:</span>$
                            <input type="text" name="inputPrenom" required>
                        </p>
                        <p style="margin-bottom:0;" id="lineConsole3"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span><span class="text-orange">Mail:</span>$ <input type="email" name="inputEmail" required>
                        </p>
                        <p style="margin-bottom:0;" id="lineConsole4"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span><span class="text-orange">Objet:</span>$ <input type="text" name="inputObjet" required>
                        </p>
                        <p style="margin-bottom:0;" id="lineConsoleContactMsg"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span><span class="text-orange">Votre
                                Message:</span>$ <br><br>
                            <textarea name="inputMessage" cols="30" rows="7" required></textarea>
                        </p>
                        <p style="margin-bottom:0;" id="lineConsole5"><span><span class="text-green">Computer:</span>
                                <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Contact/</span>$ <input type="submit" value="Valider l'envoi →" name="btnSend">
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div id="MessageBox">
        <i id="MessageIcon" class="fas fa-check"></i>
        <p id="MessageContent">Votre message a été envoyé avec succès</p>
    </div>
</body>

<?php
if (!empty($_POST["inputName"]) && !empty($_POST["inputPrenom"]) && !empty($_POST["inputEmail"]) && !empty($_POST["inputObjet"]) && !empty($_POST["inputMessage"])) {
    $destinataire = 'contact@frederic-dabadie.fr';
    $expediteur = $_POST["inputEmail"];
    $objet = $_POST["inputObjet"]; // Objet du message
    $message = $_POST["inputMessage"];
    $headers = implode("\r\n", [
        'From: John Conde ' . $_POST["inputEmail"],
        'Reply-To:' . $_POST["inputEmail"],
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=ISO-8859-1',
        'X-Mailer: PHP/' . PHP_VERSION
    ]);
    if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
    {
        echo "<script>alert('Votre message a été envoyé avec succès');</script>";
    } else // Non envoyé
    {
        echo "<script>alert('Votre message n\\''a pas pu être envoyé');</script>";
    }
}
?>
<script src="../assets/script.js"></script>

</html>