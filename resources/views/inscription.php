
<form action="index.php" method="post">
    <p>Formulaire inscription</p>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>
    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" required><br>
    <label for="mail">Mail :</label>
    <input type="email" id="mail" name="mail" required><br>
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" required><br>
    <label for="codePostal">Code postal :</label>
    <input type="text" id="codePostal" name="codePostal" required><br>
    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" required><br>
    <label for="pays">Pays :</label>
    <input type="text" id="pays" name="pays" required><br>
    <label for="tel">Telephone :</label>
    <input type="number" id="tel" name="tel" required><br>
    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required><br>
    <label for="mdpverif">Valider le mot de passe :</label>
    <input type="password" id="mdpverif" name="mdpverif" required>
    <?php
    if (!empty($erreur)) {
        echo "<p style='color: red;'>Erreur : $erreur</p>";
    }
    ?>
    <button type="submit" name="boutton_inscrire">S'inscrire</button>
</form>