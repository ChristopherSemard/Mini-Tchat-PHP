<?php
include_once('./bdd/connexion-bdd.php');

// Récupération des utilisateurs à l'aide du client MySQL
$usersStatement = $bdd->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();


// Récupération des messages à l'aide du client MySQL
$messagesStatement = $bdd->prepare('SELECT * FROM messages INNER JOIN users ON users.id = messages.user_id');
$messagesStatement->execute();
$messages = $messagesStatement->fetchAll();