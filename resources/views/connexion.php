<form action="index.php" method="post">
    <p>Formulaire connexion</p>
    <label for="mail">E-mail :</label>
    <input type="text" id="mail" name="mail" required><br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <?php
    if (!empty($erreur)) {
        echo "<p style='color: red;'>Erreur : $erreur</p>";
    }
    ?>
    <button type="submit" name="boutton_connexion">Se connecter</button>
</form>