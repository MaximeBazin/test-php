<?php
    $personne = array(
        "nom"=> readline('Entrez votre nom : '),
        "prenom" => readline('Entrez votre prenom : '),
        "age" => readline('Entrez votre age : ')
    );

    if ($personne['age'] > 18){
        echo 'vous avez plus de 18 ans';
    } elseif ($personne['age'] < 18) {
        echo 'vous avez moins de 18 ans';
    } else {
        echo 'vous avez 18 ans';
    }
 ?>
