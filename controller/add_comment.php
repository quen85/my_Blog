<?php

require_once('modele/comments.php');

$errors = check_adding_comment();

if (empty($errors)) 
{
	add_comment($_POST['content'], $_GET['id']);

	$message = 'Ajout du commentaire au blog réussi !';
	$template = 'single';
}

else
{
	$template = 'single';
}