<?php
$nummer = mt_rand(1000, 9999);
$letters = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));

$postcode = $nummer . ' ' . $letters;

echo "Willekeurige postcode: " . $postcode;
?>