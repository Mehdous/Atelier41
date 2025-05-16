<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Hub</title>
</head>
<body>

<!-- Menu de navigation -->
<div>
    <?php include('menu.php'); ?>
</div>

<div>
    <?php 
        // Get parameters
        $exo = $_GET['exo'] ?? '1';
        $part = $_GET['part'] ?? '';

        // Valid exercises
        $validExercises = ['1', '1bis', '2', '3', '4', '5', '6', '7'];
        if (!in_array($exo, $validExercises)) {
            header("Location: ?exo=1");
            exit;
        }

        // Valid parts
        $validParts = ['', 'demo', 'code'];
        if (!in_array($part, $validParts)) {
            header("Location: ?exo=" . urlencode($exo));
            exit;
        }
    ?>

    <h2>Exercice <?= $exo ?></h2>

    <!-- Section Énoncé -->
    <div>
        <h3>Énoncé</h3>
        <?php include('enonce.php'); ?>
    </div>

    <!-- Liens vers Démo et Code -->
    <div>
        <a href="?exo=<?= urlencode($exo) ?>&part=demo">[ Démo ]</a>
        <a href="?exo=<?= urlencode($exo) ?>&part=code">[ Code Source ]</a>
    </div>

    <!-- Affichage conditionnel -->
    <?php if ($part): ?>
        <div>
            <h3>
                <?= ($part === 'code') ? "Code Source" : "Démo" ?>
            </h3>

            <?php
                if ($part === 'code') {
                    echo "<pre>";
                    include('code.php');
                    echo "</pre>";
                } else {
                    include('demo.php');
                }
            ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
