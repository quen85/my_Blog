<?php

function get_comments($id)
{
	$query = 'SELECT * FROM `comments` WHERE `idPost` = '.$id;
	$results = my_fetch_all($query);

	return $results;
}

function get_comment($id)
{
	$query = 'SELECT * FROM `comments` WHERE `idComment` = '.$id;
	$results = my_fetch_all($query);$query = 'DELETE FROM `comments` WHERE `idComment` = '.$_GET['comment'];


	return $results;
}

function add_comment($content, $id)
{
	$query = 'INSERT INTO `comments` (`content`, `createdAt`, `updatedAt`, `idPost`, `idUser`) VALUES (\''.my_escape($content).'\', \''.date('Y-m-d H:i:s').'\', \''.date('Y-m-d H:i:s').'\', \''.$id.'\', \''.$_SESSION['user'].'\')';

	my_query($query);
}

function edit_comment($content, $id)
{
	$query = 'UPDATE `comments` SET `content`="'.my_escape($content).'",  `updatedAt`="'.date('Y-m-d H:i:s').'" WHERE `idComment` = '.$id;

	my_query($query);
}

function delete_comment($id)
{
	$query = 'DELETE FROM `comments` WHERE `idComment` = '.$id;
	
	my_query($query);
}

function check_adding_comment()
{
	$errors = [];
	if (empty($_POST['content']))
		$errors['content'] = 'Contenu obligatoire';

	return $errors;
}

?>