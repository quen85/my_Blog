<?php

function get_posts()
{
	$query = 'SELECT * FROM `posts`';
	$results = my_fetch_all($query);

	return $results;
}

function get_post($id)
{
	$query = 'SELECT * FROM `posts` WHERE `idPost` = '.$id;
	$results = my_fetch_all($query);

	return $results;
}

function add_post($title, $content)
{
	$query = 'INSERT INTO `posts` (`title`, `content`, `createdAt`, `updatedAt`, `idUser`) VALUES (\''.my_escape($title).'\', \''.my_escape($content).'\', \''.date('Y-m-d H:i:s').'\', \''.date('Y-m-d H:i:s').'\', \''.$_SESSION['user'].'\')';
	
	my_query($query);
}

function edit_post($title, $content, $id)
{
	$query = 'UPDATE `posts` SET `title`="'.my_escape($title).'",`content`="'.my_escape($content).'",`updatedAt`="'.date('Y-m-d H:i:s').'" WHERE `idPost` = '.$id;
	
	my_query($query);
}

function delete_post($id)
{
	$query = 'DELETE FROM `posts` WHERE `idPost` = '.$id;
	
	my_query($query);
}

function check_adding_post()
{
	$errors = [];
	if (empty($_POST['title']))
		$errors['title'] = 'Titre obligatoire';
	if (empty($_POST['content']))
		$errors['content'] = 'Contenu obligatoire';

	return $errors;
}


?>