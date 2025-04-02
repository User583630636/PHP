<?php
// Voeg de database-verbinding toe
require_once 'functions.php';

// Insert form
if(isset($_POST['submit'])){
    // Check of alle velden zijn ingevuld
    if(!empty($_POST['naam']) && !empty($_POST['soort']) && !empty($_POST['stijl']) && 
       !empty($_POST['alcohol']) && !empty($_POST['brouwcode'])) {
        
        // Voer de insert functie uit 
        if(insertRecord($_POST)){
            echo '<div style="color: green;">Bier succesvol toegevoegd</div>';
            // Redirect naar homepage na 2 seconden
            header("Refresh:2; url=index.php");
            exit;
        } else {
            echo '<div style="color: red;">Er is een fout opgetreden bij het toevoegen van het bier</div>';
        }
    } else {
        echo '<div style="color: red;">Alle velden zijn vereist!</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bier toevoegen</title>
    <style>
        label { display: inline-block; width: 100px; }
        input, select { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Bier toevoegen</h1>
    <form method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>
        
        <label for="soort">Soort:</label>
        <input type="text" id="soort" name="soort" required><br>
        
        <label for="stijl">Stijl:</label>
        <input type="text" id="stijl" name="stijl" required><br>
        
        <label for="alcohol">Alcohol %:</label>
        <input type="number" id="alcohol" name="alcohol" step="0.1" required><br>
        
        <label for="brouwcode">Brouwer:</label>
        <?php echo brewerDropdown(); ?><br>
        
        <input type="submit" name="submit" value="Toevoegen">
    </form>
    <p><a href="index.php">Terug naar overzicht</a></p>
</body>
</html>
