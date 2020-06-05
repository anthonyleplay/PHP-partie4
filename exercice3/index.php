<?php

function myfunction($a, $b) {
    return $a . ' ' . $b;
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>

    <p>===================================</p>

    <p><?= myfunction("une chaine", "de caractères") ?></p>


</body>

</html>