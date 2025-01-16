<?php
session_start();

if (isset($_SESSION['bezoeken'])) {
    $_SESSION['bezoeken']++;
} else {
    $_SESSION['bezoeken'] = 1;
}

echo "Je hebt deze pagina " . $_SESSION['bezoeken'] . " keer bezocht sinds je de browser hebt geopend.";
?>



