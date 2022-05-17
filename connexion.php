




    <!-- Intégration du header -->
    <?php include_once('header.php'); ?>

        <h2 class="text-center mb-4">CONNEXION</h2>
        <form class="container d-flex flex-column gap-3">
                <label for="inputPseudo">Pseudo</label>
                <input type="text" class="form-control" id="inputPseudo" aria-describedby="emailHelp" placeholder="Pseudo" required>
                <label for="inputPassword">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    </main>

    <!-- Intégration du footer -->
    <?php include_once('footer.php'); ?>
