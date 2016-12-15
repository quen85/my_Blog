<?php

require_once('includes/utils.php');

$errors = check_signup();

if (empty($errors)) 
{
	add_author($_POST['login'], $_POST['mail'], $_POST['mdp']);

	$message = 'Inscription réussie, bienvenue sur mon blog !';
	$template = 'home';
}

else
{
	$template = 'signup';
}

?>