<?php
include_once('./bdd/connexion-bdd.php');

// Récupération des utilisateurs à l'aide du client MySQL
$usersStatement = $bdd->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();


// $ins = $bdd->prepare('SELECT * FROM users');
// $ins->setFetchMode(PDO::FETCH_ASSOC);
// $ins->execute();
// $ins2 = $ins->fetchAll();



// Récupération des messages à l'aide du client MySQL
$messagesStatement = $bdd->prepare('SELECT *, DATE_FORMAT(messages.date, "%e/%c/%Y %k:%i") as date_format FROM messages INNER JOIN users ON users.id = messages.user_id ORDER BY messages.id DESC');
$messagesStatement->execute();
$messages = $messagesStatement->fetchAll();