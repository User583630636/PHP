<?php
function berekenCirkel($straal) {
    $pi = 3.14;
    $omtrek = 2 * $pi * $straal;
    $oppervlakte = $pi * pow($straal, 2);

    return [
        'omtrek' => $omtrek,
        'oppervlakte' => $oppervlakte
    ];
}

$straal = 5;  
$resultaten = berekenCirkel($straal);

echo "Voor een cirkel met een straal van $straal eenheden:\n";
echo "Omtrek: " . $resultaten['omtrek'] . " eenheden\n";
echo "Oppervlakte: " . $resultaten['oppervlakte'] . " vierkante eenheden\n";
?>

