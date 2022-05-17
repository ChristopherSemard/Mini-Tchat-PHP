<?php


// Intégration du header
include_once('header.php');


var_dump($_POST);

if (!isset($_POST['pseudo']) || !isset($_POST['password']) || !isset($_POST['password-confirm']) || !isset($_POST['color']))
{
	echo('Il manque des données dans le formulaire');
    return;
}	
elseif ($_POST['password'] != $_POST['password-confirm']){
	echo('Vos mots de passe ne correspondent pas');
    return;
}


$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];
$color = $_POST['color'];







// Intégration du footer
include_once('footer.php');


?>