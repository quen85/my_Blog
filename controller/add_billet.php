<?php

require_once('includes/utils.php');

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