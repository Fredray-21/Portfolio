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
    <link href="../assets/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- AOS library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex flex-row-reverse">


        <!--Main Content-->
        <div class="w-5/6 bg-gray-100">
            <div class="container bg-gray-100 pt-16 px-8">
                <h1 class="text-5xl mb-7 " data-aos="fade-down" data-aos-duration="1000"><i class="fas fa-phone-alt pr-3 text-green-600"></i><span id="Title"><span class="text-green-600">C</span>ontact</span></h1>
                <div class="border-2   border-green-500 w-1/6 my-4" data-aos="flip-left" data-aos-duration="1200"></div>

                <div class="text-lg mt-10 mb-8">
                    <p class="">Vous pouvez <span class="text-green-600 font-bold">me contacter</span> par le biais de ce formulaire.</p>
                    <p class="">Il est nécessaire de mettre une adresse mail <span class="text-green-600 font-bold">valide</span> afin que je puisse vous recontacter par la suite.</p>
                </div>

                <form method="post" action="">
                    <input autocomplete="off" class="py-4 px-12 border-b-4 border-transparent hover:bg-green-400 focus:bg-green-400 focus:border-green-700 rounded text-lg outline-none text-white bg-green-600 placeholder-white m-6" type="text" name="nom" placeholder="Nom" required>
                    <input autocomplete="off" class="py-4 px-12 border-b-4 border-transparent hover:bg-green-400 focus:bg-green-400 focus:border-green-700 rounded text-lg outline-none text-white bg-green-600 placeholder-white m-6" type="text" name="prenom" placeholder="Prenom" required><br>
                    <input autocomplete="off" class="py-4 px-12 border-b-4 border-transparent hover:bg-green-400 focus:bg-green-400 focus:border-green-700 rounded text-lg outline-none text-white bg-green-600 placeholder-white m-6" type="email" name="email" placeholder="Email" required>
                    <input autocomplete="off" class="py-4 px-12 border-b-4 border-transparent hover:bg-green-400 focus:bg-green-400 focus:border-green-700 rounded text-lg outline-none text-white bg-green-600 placeholder-white m-6" type="text" name="objet" placeholder="Objet" required><br>


                    <div class="flex items-center">
                        <textarea onkeyup="compteur()" id="textareaMessage" autocomplete="off" rows="5" cols="55" maxlength="300" name="message" placeholder="Message" class="resize-none p-4 border-b-4 border-transparent hover:bg-green-400 focus:bg-green-400 focus:border-green-700 outline-none rounded text-lg text-white bg-green-600 placeholder-white m-6" required></textarea>
                        <p class="font-bold text-xl underline"><span id="compteur">0</span>/300</p><br>
                    </div>


                    <button type="submit" class="mx-6 text-base font-bold border-2 border-green-500 bg-green-500 rounded-lg p-3 hover:bg-gray-100"><i class='fas fa-paper-plane'></i> Envoyer</button>
                </form>
            </div>
        </div>

        <div class="w-1/6  bg-gray-900  px-2 py-6  fixed  top-0  left-0 h-full ">
            <div class="px-6">
                <ul class="flex flex-col text-left">
                    <div class="flex flex-wrap justify-center">
                        <div class="px-4 w-52 mb-2">
                            <img src="../assets/profil-picture.jpeg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                        </div>
                    </div>

                    <div class="text-white text-3xl text-center mb-5 border-l-2  border-green-500" data-aos="fade-left" data-aos-duration="1000">
                        <p data-aos="fade-right" data-aos-duration="1000">Frédéric Dabadie</p>
                    </div>

                    <div class="text-white text-6xl text-center mb-5">
                        <a href="https://fr.linkedin.com/in/fr%C3%A9d%C3%A9ric-dabadie-01787b203" target="_blank" class="hover:text-green-500"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Fredray-21" target="_blank" class="hover:text-green-500"><i class="fab fa-github"></i></a>
                    </div>
                    <li class="mr-5 flex-1">
                        <a href="../index.html" class="block py-3 pl-1 align-middle text-gray-700 no-underline hover:text-green-500 border-b-2 border-transparent  hover:border-green-500">
                            <i class="fas fa-home pr-3"></i><span class="text-gray-400 ">Acceuil</span>
                        </a>
                    </li>


                    <li class="mr-5 flex-1">
                        <a href="presentation.html" class="block py-3 pl-1 align-middle text-gray-700 no-underline hover:text-green-500 border-b-2 border-transparent  hover:border-green-500">
                            <i class="fas fa-user pr-3"></i><span class="text-gray-400 ">Présentation</span>
                        </a>
                    </li>

                    <li class="mr-5 flex-1">
                        <a href="formation.html" class="block py-3 pl-1 align-middle text-gray-700 no-underline hover:text-green-500 border-b-2 border-transparent  hover:border-green-500">
                            <i class="fas fa-book pr-3"></i><span class="text-gray-400 ">Formation</span>
                        </a>
                    </li>


                    <li class="mr-5 flex-1">
                        <a href="competences.html" class="block py-3 pl-1 align-middle text-gray-700 no-underline hover:text-green-500 border-b-2 border-transparent  hover:border-green-500">
                            <i class="fas fa-chart-bar pr-3"></i><span class="text-gray-400 ">Compétences</span>
                        </a>
                    </li>


                    <li class="mr-5 flex-1">
                        <a href="experience.html" class="block py-3 pl-1 align-middle text-gray-700 no-underline hover:text-green-500 border-b-2 border-transparent  hover:border-green-500">
                            <i class="fas fa-code  pr-3"></i><span class="text-gray-400 ">Expériences</span>
                        </a>
                    </li>

                    <li class="mr-5 flex-1">
                        <a href="contact.php" class="block py-3 pl-1 align-middle  no-underline text-green-500 border-b-2   border-green-500">
                            <i class="fas fa-phone-alt pr-3"></i><span class="text-white font-bold">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</body>
<script type="text/javascript" src="../assets/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>