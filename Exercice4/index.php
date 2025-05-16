<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<?php
$nom_correct = "Mehdous";
$motdepasse_correct = "JuniaMaroc2025";

$utilisateur_reconnu = false;

if (isset($_POST["nom"]) && $_POST['nom'] !== "" && isset($_POST["mdp"]) && $_POST['mdp'] !== "") {

    $nom = trim($_POST["nom"]);
    $mdp = trim($_POST["mdp"]);


    if (strcasecmp($nom, $nom_correct) == 0 && strcasecmp($mdp, $motdepasse_correct) == 0) {
        $utilisateur_reconnu = true;
    }
}

if ($utilisateur_reconnu) {
    echo "<h2>Bienvenue, $nom_correct !</h2>";
} else {
?>

<h2>Connexion</h2>
<form method="post">
    <label>Nom :</label>
    <input type="text" name="nom" id="nom" required><br><br>
    <label>Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" required><br><br>
    <input type="submit" value="Se connecter">
</form>

<?php
}
?>

</body>
</html>
