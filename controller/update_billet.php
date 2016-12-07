<?php

require_once('includes/utils.php');

$errors = check_adding();

if (empty($errors)) 
{
	$query = 'UPDATE `billets` SET `title`="'.my_escape($_POST['title']).'",`content`="'.my_escape($_POST['content']).'" WHERE `idBillet` = '.$_GET['billet'];

	my_query($query);
	$message = 'Modification réussie !';
	$template = 'home';
}

else
{
	$template = 'update_billet';
}

