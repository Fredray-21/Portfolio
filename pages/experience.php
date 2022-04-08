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

    <!-- Style CSS & ICON Fontawesome & DEVICON  -->
    <link href="../assets/styles.css" rel="stylesheet">
    <link href="../assets/loader.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
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
                        <a href="../index.html"><i class="fas fa-home"></i><span>Acceuil</span></a>
                    </div>
                    <div class="element ">
                        <a href="./presentation.html"><i class="fas fa-user"></i><span>Présentation</span></a>
                    </div>
                    <div class="element ">
                        <a href="./formation.html"><i class="fas fa-book"></i><span>Formation</span></a>
                    </div>
                    <div class="element ">
                        <a href="./competences.html"><i class="fas fa-chart-bar"></i><span>Compétences</span></a>
                    </div>
                    <div class="element active">
                        <a href="./experience.php"><i class="fas fa-code"></i><span>Expériences</span></a>
                    </div>
                    <div class="element">
                        <a href="./contact.php"><i class="fas fa-phone-alt"></i><span>Contact</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="nav-tel">
            <div id="list-link-nav">
                <div class="element ">
                    <a href="../index.html"><i class="fas fa-home"></i><span>Acceuil</span></a>
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
                <div class="element active">
                    <a href="./experience.php"><i class="fas fa-code"></i><span>Expériences</span></a>
                </div>
                <div class="element">
                    <a href="./contact.php"><i class="fas fa-phone-alt"></i><span>Contact</span></a>
                </div>
            </div>
        </section>

        <section id="main" style="display: none;">
            <h1><i class="fas fa-code"></i> <span id="textmachine">Mon Expériences</span></h1>
            <div class="console">
                <div id="button-top">
                    <div id="button-red" class="button-console"></div>
                    <div id="button-orange" class="button-console"></div>
                    <div id="button-green" class="button-console"></div>
                </div>

                <div id="ListLineConsole">
                    <p style="margin-bottom:0;" id="lineConsole1"><span><span class="text-green">Computer:</span>
                            <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Expériences</span>$ cat Sommaire.txt</p>
                    <span>.</span><br>
                    <span>|_____ <a class="text-orange" href="#sommaire-PPE">>Projets Personnels Encadrés</a></span><br>
                    <span>|_____ <a class="text-orange" href="#sommaire-pro">>Professionnelles</a></span><br>
                    <span>|_____ <a class="text-orange" href="#sommaire-perso">>Personnelles</a></span><br>

                    <br>
                    <p style="margin-bottom:0;" id="lineConsole1"><span><span class="text-green">Computer:</span>
                            <span class="text-blue">~/Portefolio</span></span><span class="text-blue">/Expériences</span>$ tree</p>
                    <span>.</span><br>
                    <span>|_____ <span class="text-orange" id="sommaire-PPE">>Projets Personnels Encadrés</span></span><br>

                    <span>| |_____ <button class="button-showhide" onclick="showhide(this)">2022 > <span class="text-secondaire">(Sélectionné pour Voir)</span></button></span><br>

                    <div id="div-hidden-2022" class="hidden linktoggle">
                        <div class="container-card-experience">
                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video1');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video1" src="../assets/pro/" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><span class="text-orange">PPE1 RESA VVA </span></div>
                                    <p>Developpement d'une application en <span class="text-important">Client
                                            Léger</span>
                                        qui permet la génération de curriculum vitae en fonction des information rentree préalablement.
                                    </p>
                                    <p class="date-card">Réalisé de Janvier à Février 2022</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                    <span class="balise">#XML</span>
                                </div>
                            </div>

                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video1');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video1" src="../assets/pro/" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><span class="text-orange">PPE2 FETA RESTO</span>
                                    </div>
                                    <p>Developpement d'une application en <span class="text-important">Client
                                            Léger</span>
                                        qui permet la génération de curriculum vitae en fonction des information rentree préalablement.
                                    </p>
                                    <p class="date-card">Réalisé de Janvier à Février 2022</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                    <span class="balise">#XML</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span>| |_____ <button class="button-showhide" onclick="showhide(this)">2021 > <span class="text-secondaire">(Sélectionné pour Voir)</span></button></span><br>
                    <div id="div-hidden-2021" class="hidden linktoggle">
                        <div class="container-card-experience">
                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video1');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video1" src="../assets/pro/" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><span class="text-orange">PPE1 Générateur de curriculum vitae</span>
                                    </div>
                                    <p>Developpement d'une application en <span class="text-important">Client
                                            Léger</span>
                                        qui permet la génération de curriculum vitae en fonction des information rentree préalablement.
                                    </p>
                                    <p class="date-card">Réalisé de Janvier à Février 2022</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                    <span class="balise">#XML</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span>|</span><br>
                    <span>|_____ <span class="text-orange" id="sommaire-pro">>Professionnelles</span></span><br>
                    <?php /* if (isset($_GET['RATP']) && $_GET['RATP'] == 'q29v52GSeiHQnidHnM37KJAg4x7k4u9Zu2t5iMLVFC8745Ev56i5XpS') {
                        echo "<span>| |_____ <button class='button-showhide'>RATP ˅</button></span><br>
                        <div id='div-hidden-RATP'>";
                    } else {
                        // ici span et div du dessous
                    }  */ ?>
                    <span>| |_____ <button class="button-showhide" onclick="showhide(this)">RATP > <span class="text-secondaire">(Sélectionné pour Voir)</span></button></span><br>
                    <div id="div-hidden-RATP" class="hidden linktoggle">
                        <div class="container-card-experience">
                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video1');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video1" src="../assets/pro/" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><a href="https://www.ratp.fr/" target="_blank">RATP</a>
                                    </div>
                                    <p>Developpement d'une maquette de faisabilité en <span class="text-important">Client
                                            Léger</span>
                                        qui permet la génération de bordereaux XML spécifique, en fonction d'un
                                        formulaire choisi et de ses champs.
                                    </p>
                                    <p class="date-card">Réalisé de Janvier à Février 2022</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                    <span class="balise">#XML</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span>| |_____ <button class="button-showhide" onclick="showhide(this)">ANDRA ><span class="text-secondaire">(Sélectionné pour Voir)</span></button></span><br>
                    <div id="div-hidden-ANDRA" class="hidden linktoggle">
                        <div class="container-card-experience">
                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video2');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video2" src="../assets/pro/astreinte.mp4" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><a href="https://www.andra.fr/" target="_blank">ANDRA</a>
                                    </div>
                                    <p>Adaptation d'une application <span class="text-important">Client Lourd</span> de
                                        gestion et calcule de colis en application <span class="text-important">Client
                                            Léger.</span>
                                    </p>
                                    <p class="date-card">Réalisé de Juin à Juillet 2021</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#BootStrap</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                </div>
                            </div>

                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video3');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video3" src="../assets/pro/Gestion-tache.mp4" muted="" autoplay="" loop=""></video>

                                <div class="card-text-container">
                                    <div class="card-Title"><a href="https://www.andra.fr/" target="_blank">ANDRA</a>
                                    </div>
                                    <p>Création d'une petite application <span class="text-important">Client
                                            Léger</span>
                                        d'organisation de gestion de taches.
                                    </p>
                                    <p class="date-card">Réalisé en Mai 2021</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#BootStrap</span>
                                    <span class="balise">#PHP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span>|</span><br>
                    <span>|_____ <span class="text-orange" id="sommaire-perso">>Personnelles</span></span><br>
                    <span>| |_____ <button class="button-showhide" onclick="showhide(this)">Flutter Gestionaire de
                            Mots de passe > <span class="text-secondaire">(Sélectionné pour
                                Voir)</span></button></span><br>
                    <div id="div-hidden-Flutter" class="hidden linktoggle">
                        <div class="container-card-experience">
                            <div class="card-experience">
                                <button class="button-fullscreen" title="Fullscreen" onclick="goFullscreen('video4');">
                                    <i class="fas fa-expand"></i> Fullscreen
                                </button>
                                <video id="video4" src="../assets/pro/" muted="" autoplay="" loop=""></video>
                                <div class="card-text-container">
                                    <div class="card-Title"><a href="https://www.ratp.fr/" target="_blank">RATP</a>
                                    </div>
                                    <p>Developpement d'une maquette de faisabilité en <span class="text-important">Client
                                            Léger</span>
                                        qui permet la génération de bordereaux XML spécifique, en fonction d'un
                                        formulaire choisi et de ses champs
                                    </p>
                                    <p class="date-card">Réalisé de Janvier à Février 2022</p>
                                    <span class="balise">#HTML/CSS</span>
                                    <span class="balise">#JavaScript</span>
                                    <span class="balise">#PHP</span>
                                    <span class="balise">#XML</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- <form id="form-pass" style="margin-left: 15%; display:none;" action="" method="POST">
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="btnOK">
    </form> -->
    <?php  /*if (empty($_GET['RATP'])) {
        // ici form du dessus
    }
    if (isset($_POST['btnOK']) && isset($_POST['password'])) {
        $password = $_POST['password'];
        if ($password == 'Vpkg4x-2104') {
            echo "<script>window.location.href = './experience.php?RATP=q29v52GSeiHQnidHnM37KJAg4x7k4u9Zu2t5iMLVFC8745Ev56i5XpS';</script>";
        } else {
            echo "<script> alert('Erreur de Connexion')</script>";
        }
    } */
    ?>
    </div>
</body>

<script src="../assets/script.js"></script>

</html>