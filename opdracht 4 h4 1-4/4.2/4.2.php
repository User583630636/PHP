<?php 

// auteur: Mustafa
// functie: een switch


echo date("l") . "<br>"; 

$date = date("l jS \of F Y h:i:s A");  

echo $date . "<br>";  


switch (date("l")) {
	case 'Thursday':
    echo "Het is donderdag";  
		break;
	
	default:

		break;
}


?>