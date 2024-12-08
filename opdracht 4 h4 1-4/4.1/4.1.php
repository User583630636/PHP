<?php 

// auteur: Mustafa
// functie: 4 soorte dagdelen


echo date("l") . "<br>"; 

$date = date("l jS \of F Y h:i:s A");  

echo $date . "<br>";  

if (date("l") == "Thursday") {  
    echo "Het is donderdag";  
}
else
{
    echo("het is niet donderdag")
}
?>