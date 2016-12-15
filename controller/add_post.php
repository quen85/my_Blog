<?php

require_once('modele/posts.php');

$errors = check_adding_post();

if (empty($errors)) 
{
	add_post($_POST['title'], $_POST['content']);

	$message = 'Ajout au blog réussi !';
	$template = 'home';
}

else
{
	$template = 'add_post';
}