<?php
$text = '';
function myfunction($text) {
    return $text;
    } ;

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>

    <p>===================================</p>

    <p><?= myfunction("une chaine de caractères") ?></p>


</body>

</html>