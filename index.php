
<?php
// Connexion à la base de données
require_once 'connexion-bdd.php';

// Démarrage de session
session_start();

?>



    <!-- Intégration du header -->
    <?php include_once('header.php'); ?>

    <!-- Integration du tchat -->
    <?php include_once('tchat.php'); ?>


    <!-- Intégration du footer -->
    <?php include_once('footer.php'); ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>