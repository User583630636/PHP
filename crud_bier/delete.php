<?php
// Voeg de database-verbinding toe
require_once 'functions.php';

// Controleer of ID is meegegeven
if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// Haal het record op
$id = $_GET['id'];
$row = getRecord($id);

// Als er geen record is gevonden
if(!$row) {
    echo "Geen bier gevonden met ID: $id";
    exit;
}

// Als het formulier is verzonden voor bevestiging
if(isset($_POST['confirmed'])) {
    if(deleteRecord($id)) {
        echo '<div style="color: green;">Bier succesvol verwijderd</div>';
        // Redirect naar homepage na 2 seconden
        header("Refresh:2; url=index.php");
        exit;
    } else {
        echo '<div style="color: red;">Er is een fout opgetreden bij het verwijderen van het bier</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bier verwijderen</title>
</head>
<body>
    <h1>Bier verwijderen</h1>
    <p>Weet u zeker dat u het volgende bier wilt verwijderen?</p>
    <p><strong>Naam:</strong> <?php echo $row['naam']; ?></p>
    <p><strong>Soort:</strong> <?php echo $row['soort']; ?></p>
    <p><strong>Stijl:</strong> <?php echo $row['stijl']; ?></p>
    <p><strong>Alcohol:</strong> <?php echo $row['alcohol']; ?>%</p>
    <p><strong>Brouwer:</strong> <?php echo getBrewerName($row['brouwcode']); ?></p>
    
    <form method="post">
        <input type="hidden" name="confirmed" value="1">
        <input type="submit" value="Ja, verwijder dit bier">
    </form>
    <p><a href="index.php">Nee, terug naar overzicht</a></p>
</body>
</html>

