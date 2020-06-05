<?php
$nombre = 0;
while ($nombre < 10) {
    $nombre ++;
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>
    <h1>Exercice 1</h1>

    <p>Créer une variable et l'initialiser à 0. <br>
        Tant que cette variable n'atteint pas 10, il faut :</p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrementer</li>
    </ul>

    <p>===================================</p>

    <p><?= $nombre ?></p>


</body>

</html>