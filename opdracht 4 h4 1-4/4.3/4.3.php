<?php

//auteur: Mustafa
//functie: 2 variablen


$a = 8; 
$b = 5; 

if ($a > $b) {
    $grootste = $a;
    $kleinste = $b;
} else {
    $grootste = $b;
    $kleinste = $a;
}


$resultaat = ($grootste * 2) + $kleinste;


echo "De grootste waarde is: $grootste\n";
echo "De kleinste waarde is: $kleinste\n";
echo "Het resultaat van (grootste * 2) + kleinste is: $resultaat\n";
?>