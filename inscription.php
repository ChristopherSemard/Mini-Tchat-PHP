




    <!-- Intégration du header -->
    <?php include_once('header.php'); ?>

        <h2 class="text-center mb-4">INSCRIPTION</h2>
        <form class="container  d-flex flex-column gap-3" method="POST" action="./submit-inscription.php">
            <!-- Choix de pseudo -->
            <label for="inputPseudo">Pseudo</label>
            <input type="text" class="form-control" id="inputPseudo" name="pseudo" placeholder="Pseudo" required>
            <!-- Choix de mot de passe -->
            <label for="inputPassword">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mot de passe" required>
            <!-- Confirmation mot de passe -->
            <label for="inputConfirmPassword">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="inputConfirmPassword" name="password-confirm" placeholder="Mot de passe" required>
            <!-- Choix de couleur -->
            <label for="inputColor">Couleur du pseudo</label>
            <input type="color" id="inputColor" name="color" value="#ffdd00">
            <!-- Bouton envoyer -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    <!-- Intégration du footer -->
    <?php include_once('footer.php'); ?>
