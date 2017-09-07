<?php include('./pages/connexion_bdd.php'); ?>
<form action="" method="post">
    <label for="login">Identifiant</label>
    <input id="login" name="pseudo" type="text">
    <label for="password">Mot de passe</label>
    <input id="password" name="mot_de_passe" type="text">
    <input type="submit" value="Valider">
</form>