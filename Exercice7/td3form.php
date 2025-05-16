<!DOCTYPE html>
<html>
<head>
    <title>Liste des loisirs</title>
</head>
<body>
    <form action="td3affiche.php" method="post">
        <h3>Loisirs pratiqués</h3>
        <?php
        $loisirs = ["Sports", "Musique", "Jeux", "Voyages"];
        foreach ($loisirs as $loisir) {
            echo '<input type="checkbox" name="loisirs[]" value="' . $loisir . '"> ' . $loisir . '<br>';
        }
        ?>
        <input type="submit" value="Valider">
    </form>
</body>
</html>
