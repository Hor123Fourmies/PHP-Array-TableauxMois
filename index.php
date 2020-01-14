<?php

/*
 *#PHP - Les tableaux
 * ##Exercice 1
 * ## Créer un tableau mois et l'initialiser avec les valeurs suivantes :
 *  janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, décembre
*/

$mois = array ("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");


##Exercice 2
## Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

echo $mois[2];

echo "<br><br>";


##Exercice 3
## Avec le tableau de l'exercice , afficher la valeur de l'index 5.

echo $mois[5];

echo "<br><br>";


##Exercice 4
## Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

$mois[7]="août";

echo $mois[7];

echo "<br><br>";


##Exercice 5
## Créer un tableau associatif avec comme index le numéro des départements des Hauts de France
## et en valeur leur nom.

$departements = array (02=>"Aisne", 59=>"Nord", 60=>"Oise", 62=>"Pas de Calais", 80=>"Somme");


##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

echo $departements["59"];

echo "<br><br>";


##Exercice 7
## Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

$departements["51"]="Marne";
echo $departements["51"];

echo "<br><br>";


##Exercice 8
## Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

foreach ($mois as $texte){
    echo $texte.", ";
}

echo "<br><br>";


##Exercice 9
## Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

foreach ($departements as $numero => $nom){
    echo $nom."<br>";
}

echo "<br>";


##Exercice 10
## Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.

foreach ($departements as $numero => $nom){
    echo "Le département ".$nom." a le numéro : ".$numero."."."<br>";
}
