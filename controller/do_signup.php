<?php

function check_signup()
{
	$errors = [];
	if (empty($_POST['login']))
		$errors['login'] = 'Login obligatoire';
	if (empty($_POST['mail']))
		$errors['mail'] = 'Mail obligatoire';
	if (empty($_POST['mdp']))
		$errors['mpd'] = 'Mot de passe obligatoire';
	if (empty($_POST['r_mdp']) || strcmp($_POST['mdp'], $_POST['r_mdp']) != 0)
		$errors['mdp'] = 'Mot de passe différents';

	return $errors;
}

$errors = check_signup();

if (empty($errors)) 
{
	$query = 'INSERT INTO `users` (`login`, `email`, `password`) VALUES (\''.my_escape($_POST['login']).'\', \''.my_escape($_POST['mail']).'\', \''.sha1($_POST['mdp']).'\')';

	my_query($query);
	$message = 'Inscription réussie, bienvenue sur mon blog !';
	$template = 'home';
}

else
{
	$template = 'signup';
}

?>