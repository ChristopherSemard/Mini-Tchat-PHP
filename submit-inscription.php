<?php
session_start();
include_once('./bdd/connexion-bdd.php');
include_once('./bdd/data-bdd.php');

// Intégration du header
include_once('header.php');

// Définition des données récupérées
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];
$color = $_POST['color'];

// Check si les informations sont valides
$validForm = checkForm($pseudo, $password, $passwordConfirm, $color, $users);
// Si le formulaire est valide on crée l'utilisateur en base de données
if($validForm){
    addUserDb($bdd, $pseudo, $password, $color);
    createConnection($pseudo);
}


// Check de la validité des infos
function checkForm($pseudo, $password, $passwordConfirm, $color, $users) {
    
    // Regex pour valider les données
    $regexPseudo = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,100}$/u";
    $regexPassword = "/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/";


    // Validité du pseudo
    if (!preg_match($regexPseudo, $pseudo)){
        echo("<h3 class='text-center alert alert-danger' role='alert'>Votre pseudo n'est pas valide.</h3>");
        return false;
    }	
    // Validité du mot de passe
    elseif ( !preg_match($regexPassword, $password)){
        echo("<h3 class='text-center alert alert-danger' role='alert'>Votre mot de passe n'est pas valide.</h3>");
        return false;
    }	
    // Correspondance du mot de passe
    elseif ($password != $passwordConfirm){
        echo("<h3 class='text-center alert alert-danger' role='alert'>Vos mots de passe ne correspondent pas.</h3>");
        return false;
    }

    // Existance de l'utilisateur
    if(checkUserAlreadyExist($pseudo, $users)){
        echo("<h3 class='text-center alert alert-danger' role='alert'>Ce pseudo est déjà utilisé</h3>");
        return false;
    }

    // Si aucun problème n'a été trouvé on valide l'inscription
    echo("  <h3 class='text-center alert alert-success' role='alert'>Félicitations, votre inscription est terminée</h3>");
            
    return true;
};

// Requête pour créer l'utilisateur en BDD
function addUserDb($bdd, $pseudo, $password, $color){
    $hashPassword = hashPassword($password);
    $addUser = $bdd->prepare('INSERT INTO users (pseudo, password, color) VALUES (:pseudo, :password, :color)');
    $addUser->execute(['pseudo' => $pseudo,'password' => $hashPassword,'color' => $color]);
}


// Hash du password
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}


// Check si le pseudo est déjà utilisé dans la BDD
function checkUserAlreadyExist($pseudo, $users){

    foreach ($users as $key => $value) {
        if ($pseudo == $value['pseudo']){
            return true;
        }
    }
    return false;
}

// Création de la connexion
function createConnection($pseudo){

    $_SESSION['LOGGED_USER'] = $pseudo;
}




// Intégration du footer
include_once('footer.php');


?>