<?php

require_once('includes/utils.php');

$errors = check_adding();

if (empty($errors)) 
{
	$query = 'UPDATE `posts` SET `title`="'.my_escape($_POST['title']).'",`content`="'.my_escape($_POST['content']).'" WHERE `idPost` = '.$_GET['post'];

	my_query($query);
	$message = 'Modification réussie !';
	$template = 'home';
}

else
{
	$template = 'edit_post';
}

