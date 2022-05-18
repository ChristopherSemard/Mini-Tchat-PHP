<?php

session_start();
include_once('./bdd/connexion-bdd.php');
include_once('./bdd/data-bdd.php');

// Intégration du header
include_once('header.php');

// Définition des données récupérées
$message = $_POST['message'];

$userId = retrieveUser($_SESSION['LOGGED_USER'], $users);
addMessageBdd($bdd, $message, $userId);
header('Location: ./index.php');


// Requête pour créer l'utilisateur en BDD
function addMessageBdd($bdd, $message, $userId){
    $addMessage = $bdd->prepare('INSERT INTO messages (message, user_id, date) VALUES (:message, :user_id, NOW())');
    $addMessage->execute(['message' => $message,'user_id' => $userId]);
}

function retrieveUser($pseudo, $users){
    // Parcourir la liste des utilisateur
    foreach ($users as $key => $value) {
        // Si les informations correspondent
        if ($value['pseudo'] == $pseudo ){
            return $value['id'];
        }
    }
    
}