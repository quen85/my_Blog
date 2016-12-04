<?php

function check_adding()
{
	$errors = [];
	if (empty($_POST['title']))
		$errors['title'] = 'Titre obligatoire';
	if (empty($_POST['content']))
		$errors['content'] = 'Contenu obligatoire';

	return $errors;
}

$errors = check_adding();

if (empty($errors)) 
{
	$query = 'INSERT INTO `billets` (`title`, `content`, `idUser`) VALUES (\''.my_escape($_POST['title']).'\', \''.my_escape($_POST['content']).'\', \''.$_SESSION['user'].'\')';

	my_query($query);
	$message = 'Ajout au blog réussi !';
	$template = 'home';
}

else
{
	$template = 'add_billet';
}