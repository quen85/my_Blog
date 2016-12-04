<?php

require_once('modele/user.php');

function auth()
{
	global $errors;
	$errors = [];
	if (empty($_POST['login']))
		$errors['login'] = 'Login obligatoire';
	if (empty($_POST['mdp']))
		$errors['mpd'] = 'Mot de passe obligatoire';
	if (!empty($errors))
		return $errors;

	$login = $_POST['login'];
	$pass = $_POST['mdp'];

	return user_auth($login, $pass);
}

$user = auth();

if (!$user) {
	$template = 'login';
}
else {
	$_SESSION['user'] = $user['id'];
	$template = 'home';
}

?>