<?php

require_once('modele/comments.php');

$errors = check_adding_comment();

if (empty($errors)) 
{
	edit_comment($_POST['content'], $_GET['comment']);

	$message = 'Modification réussie !';
	$template = 'single';
	$action = 'single&id='.$_GET['id'];
}

else
{
	$template = 'single';
	$action = 'single&comment='.$_GET['comment'];
}

