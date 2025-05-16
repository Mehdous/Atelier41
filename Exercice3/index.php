<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de tableau</title>
</head>
<body>

<h2>Générer un tableau</h2>

<form method="get">
    <label>Nombre de lignes (L) :</label>
    <input type="number" name="rows" id="rows" required><br><br>

    <label>Nombre de colonnes (C) :</label>
    <input type="number" name="cols" id="cols" required><br><br>

    <label>Taille de bordure (B en pixels) :</label>
    <input type="number" name="border" id="border" required><br><br>

    <input type="submit" value="Générer le tableau">
</form>

<?php
if  (isset($_GET["rows"]) && $_GET['rows']!=="" && isset($_GET["cols"]) && $_GET['cols']!=="" && isset($_GET["border"])&& $_GET['border']!=="") {
    $rows = $_GET["rows"];
    $cols = $_GET["cols"];
    $border = $_GET["border"];

    echo "<h3>Tableau généré ($rows lignes × $cols colonnes, bordure : $border px)</h3>";
    echo "<table style='border: {$border}px; border-collapse: collapse;'>";

    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            echo "<td style='border: {$border}px solid black; width: 50px; height: 30px;'></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
