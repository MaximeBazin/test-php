<?php
    $personnes = array(
        'personne1'=>[
            "nom"=>  readline('Entrez votre nom : '),
            "prenom" => readline('Entrez votre prenom : '),
            "age" =>  readline('Entrez votre age : ')
            ],
        'personne_2'=>[
            "nom"=>  readline('Entrez votre nom : '),
            "prenom" => readline('Entrez votre prenom : '),
            "age" =>  readline('Entrez votre age : ')
            ],
        'personne_3'=>[
            "nom"=>  readline('Entrez votre nom : '),
            "prenom" => readline('Entrez votre prenom : '),
            "age" =>  readline('Entrez votre age : ')
            ],
        );



        foreach ($personnes as $personne) {
            if ($personne['age'] > 18){
            echo $personne['prenom']. ' a plus de 18 ans'. "\n" ;
        }
    }


 ?>
