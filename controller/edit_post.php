<?php

require_once('modele/posts.php');

$errors = check_adding_post();

if (empty($errors)) 
{
	edit_post($_POST['title'], $_POST['content'], $_GET['post']);

	$message = 'Modification réussie !';
	$template = 'home';
}

else
{
	$template = 'edit_post';
}

