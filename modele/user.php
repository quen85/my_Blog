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

?>