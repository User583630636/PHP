<?php

if (isset($_COOKIE['bezoeken'])) {
   
    $totaal_bezoeken = $_COOKIE['bezoeken'] + 1;
} else {
    
    $totaal_bezoeken = 1;
}


setcookie('bezoeken', $totaal_bezoeken, time() + (30 * 24 * 60 * 60), '/');

echo "Je hebt deze pagina $totaal_bezoeken keer bezocht.";
?>