<?php
session_start();
include_once('./bdd/data-bdd.php');

// Intégration du header
include_once('header.php');

// Définition des données récupérées
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];



// Check si l'user existe
checkUser($pseudo, $password, $users);
    


function checkUser($pseudo, $password, $users){
    // Parcourir la liste des utilisateur
    foreach ($users as $key => $value) {
        // Si les informations correspondent
        if ($pseudo == $value['pseudo'] && password_verify($password, $value['password'])){
            // Création de la connexion
            createConnection($pseudo);
            // Redirection vers l'index
            header('Location: ./index.php');
        }
    }
    // Si les informations ne correspondent pas on affiche l'erreur
    echo("<h3 class='text-center alert alert-danger' role='alert'>Vos informations ne sont pas valides.</h3>");
}
    

function createConnection($pseudo){
    $_SESSION['LOGGED_USER'] = $pseudo;
}



// Intégration du footer
include_once('footer.php');


?>