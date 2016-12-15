<?php

function user_auth($login, $pass)
{
	$query = 'SELECT * FROM `users` WHERE `login` = \''.my_escape($login).'\' AND `password` = \''.sha1($pass).'\'';
	
	$results = my_fetch_all($query);

	if (count($results) < 1) {
		$errors['login'] = 'identifiants incorrects';
		return false;
	}
	else{
		return $results[0];
	}
}

function get_author($id)
{
	$query = 'SELECT login FROM `users` WHERE `id` = '.$id;
	$result = my_fetch_all($query);

	return $result;
}

function add_author($login, $mail, $pass)
{
	$query = 'INSERT INTO `users` (`login`, `email`, `password`) VALUES (\''.my_escape($login).'\', \''.my_escape($mail).'\', \''.sha1($pass).'\')';

	my_query($query);
}

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

?>