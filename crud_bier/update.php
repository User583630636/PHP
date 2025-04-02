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

// Als het formulier is verzonden
if(isset($_POST['submit'])) {
    // Check of alle velden zijn ingevuld
    if(!empty($_POST['naam']) && !empty($_POST['soort']) && !empty($_POST['stijl']) && 
       !empty($_POST['alcohol']) && !empty($_POST['brouwcode'])) {
        
        // Maak een array met de formuliergegevens
        $data = [
            'naam' => $_POST['naam'],
            'soort' => $_POST['soort'],
            'stijl' => $_POST['stijl'],
            'alcohol' => $_POST['alcohol'],
            'brouwcode' => $_POST['brouwcode'],
            'biercode' => $id
        ];
        
        // Voer de update uit
        if(updateRecord($data)) {
            echo '<div style="color: green;">Bier succesvol bijgewerkt</div>';
            // Redirect naar homepage na 2 seconden
            header("Refresh:2; url=index.php");
            exit;
        } else {
            echo '<div style="color: red;">Er is een fout opgetreden bij het bijwerken van het bier</div>';
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
    <title>Bier bijwerken</title>
    <style>
        label { display: inline-block; width: 100px; }
        input, select { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Bier bijwerken</h1>
    <form method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" value="<?php echo $row['naam']; ?>" required><br>
        
        <label for="soort">Soort:</label>
        <input type="text" id="soort" name="soort" value="<?php echo $row['soort']; ?>" required><br>
        
        <label for="stijl">Stijl:</label>
        <input type="text" id="stijl" name="stijl" value="<?php echo $row['stijl']; ?>" required><br>
        
        <label for="alcohol">Alcohol %:</label>
        <input type="number" id="alcohol" name="alcohol" step="0.1" value="<?php echo $row['alcohol']; ?>" required><br>
        
        <label for="brouwcode">Brouwer:</label>
        <?php echo brewerDropdown($row['brouwcode']); ?><br>
        
        <input type="submit" name="submit" value="Bijwerken">
    </form>
    <p><a href="index.php">Terug naar overzicht</a></p>
</body>
</html>