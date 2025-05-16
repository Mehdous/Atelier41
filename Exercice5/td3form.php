<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Formulaire 5</title>
</head>
<body>
	<form action="td3affiche.php" method="get">
    <label>Jour :</label>
    <select name="jour" id="jour">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select><br><br>

    <label>Mois :</label>
    <select name="mois" id="mois">
        <?php
        $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        foreach ($mois as $index => $nom) {
            $valeur = $index + 1;
            echo "<option value=\"$valeur\">$nom</option>";
        }
        ?>
    </select><br><br>

    <label>Année :</label>
    <select name="annee" id="annee">
        <?php
        for ($i = 1980; $i <= 2005; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="Afficher la date">
	</form>
</body>
</html>