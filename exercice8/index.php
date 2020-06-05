<?php

function myfunction($a, $b, $c) {
    return $a + $b + $c;
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body>
    <h1>Exercice 8</h1>

    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  <br>
        Tous les paramètres doivent avoir une valeur par défaut.</p>

    <p>===================================</p>

    <p><?= myfunction(12, 45, 78) ?></p>


</body>

</html>