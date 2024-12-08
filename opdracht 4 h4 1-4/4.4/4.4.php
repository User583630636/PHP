<?php

// Auteur: Mustafa
// functie: prijzen verhogen met procenten


$productprijzen = [
    "Laptop" => 1300,
    "Koptelefoon" => 50,
    "Monitor" => 150,
    "Muis" => 60,
    "Toetsenbord" => 140,
    "USB-stick" => 30,
];

foreach ($productprijzen as $product => $prijs) {
    if ($prijs > 150) {
        $productprijzen[$product] = $prijs * 1.19; 
    } elseif ($prijs < 55) {
        $productprijzen[$product] = $prijs * 1.11; 
    }
}

echo "Producten met aangepaste prijzen:\n";
foreach ($productprijzen as $product => $prijs) {
    echo "$product: €" . number_format($prijs, 2) . "\n";
}
?>