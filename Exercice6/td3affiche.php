<!DOCTYPE html>
<html>
<head>
    <title>Loisirs choisis</title>
</head>
<body>
    <?php
    if (isset($_POST['loisir']) && $_POST['loisir'] != "") {
        $loisirChoisi = $_POST['loisir'];
        echo "Votre loisir favori est : $loisirChoisi.";
    } else {
        echo "Aucun loisir sélectionné.";
    }
    ?>
</body>
</html>