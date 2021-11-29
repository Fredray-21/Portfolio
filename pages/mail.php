<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('ptfred2104@gmail.com', 'Envoi depuis la page Contact', $_POST['object'] . $_POST['message'], 'From: ' . $_POST['AdressAuteur'] . '');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    } else {
        echo "non";
        echo $_POST['AdressAuteur'];
    }
    ?>
</body>

</html>