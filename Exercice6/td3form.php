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
        foreach ($loisirs as $l) {
            echo '<input type="radio" name="loisir" value="' . $l . '"> ' . $l . '<br>';
         }
        ?>
        <input type="submit" value="Envoyer">
</form>
</body>
</html>
