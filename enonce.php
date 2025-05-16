<?php
// Exemple : ?exo=1 lira les fichiers texte correspondants à l'exercice 1

$paths = [
    "1"    => ["Enonce/Exercice1.txt"],
    "1bis" => ["Enonce/Exercice1bis.txt"],
    "2"    => ["Enonce/Exercice2.txt"],
    "3"    => ["Enonce/Exercice3.txt"],
    "4"    => ["Enonce/Exercice4.txt"],
    "5"    => ["Enonce/Exercice5.txt"],
    "6"    => ["Enonce/Exercice6.txt"],
    "7"    => ["Enonce/Exercice7.txt"],
];

if (isset($paths[$exo])) {
    foreach ($paths[$exo] as $txt) {
        if (file_exists($txt)) {
            echo "<h3>=== $txt ===</h3>";
            echo "<pre>" . htmlspecialchars(file_get_contents($txt)) . "</pre>";
        } else {
            echo "<p>Fichier non trouvé</p>";
        }
    }
} else {
    echo "<p>Aucun fichier trouvé pour cet exercice.</p>";
}
?>
