<?php
function myfunction($age, $gender) {
    switch ($gender) {
        case "Homme":
            if ($age >= 18) {
                $message = "Vous êtes un homme et vous êtes majeur<br>";
            }else{
                $message = "Vous êtes un homme et vous êtes mineur<br>";
            }
          break;
        case "Femme":
            if ($age >= 18) {
                $message = "Vous êtes une femme et vous êtes majeure<br>";
            }else {
                $message = "Vous êtes une femme et vous êtes mineur<br>";
            }
          break;
        default :
            $message = "entrer un genre valide ( Homme ou Femme ).";
        }
    }
    return $message ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>
    <p>La fonction doit renvoyer en fonction des paramètres :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeure</li>
        <li>Vous êtes une femme et vous êtes mineure</li>
    </ul>

    <p>===================================</p>

    <p><?= myfunction(27, "Femme") ?></p>


</body>

</html>