<?php

function myfunction($lastname, $firstname, $age) {
    return  'Bonjour ' . $lastname . ' ' . $firstname . ' , tu as ' . $age . ' ans.';
    } ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <h1>Exercice 6</h1>

    <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme : <br> 
        Bonjour + <b>nom</b> + <b>prénom</b> + , tu as + <b>age</b> + ans.</p>

    <p>===================================</p>

    <p><?= myfunction('Le Play', 'Anthony', 33) ?></p>


</body>

</html>