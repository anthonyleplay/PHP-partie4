<?php

function compare($numberA, $numberB) {
    if($numberA > $numberB){
        return 'Le premier nombre est plus grand';
    }else if($numberA < $numberB){
        return 'Le premier nombre est plus petit';
    }else {
        return 'Les deux nombres sont identiques';
    }
} ;

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ul>
        <li><i>Le premier nombre est plus grand</i> si le premier nombre est plus grand que le deuxième</li>
        <li><i>Le premier nombre est plus petit</i> si le premier nombre est plus petit que le deuxième</li>
        <li><i>Les deux nombres sont identiques</i> si les deux nombres sont égaux</li>
    </ul>

    <p>===================================</p>

    <p><?= compare(3, 2) ?></p>


</body>

</html>