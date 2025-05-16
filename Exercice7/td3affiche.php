<!DOCTYPE html>
<html>
<head>
    <title>Loisirs choisis</title>
</head>
<body>
    <?php
    if (isset($_POST['loisirs']) && !empty($_POST['loisirs'])) {
        $loisirs = $_POST['loisirs'];
        sort($loisirs);
        echo "Vous pratiquez aussi comme loisirs : " . implode(" - ", $loisirs);
    } else {
        echo "Vous n'avez sélectionné aucun loisir.";
    }
    ?>
</body>
</html>
