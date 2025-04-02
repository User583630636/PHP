<?php
// Voeg de database-verbinding toe
require_once 'functions.php';

// Toon de hoofdpagina
crudMain();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bieren Beheer</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- De inhoud wordt gegenereerd door de crudMain functie -->
</body>
</html>



