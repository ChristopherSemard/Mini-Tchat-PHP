
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