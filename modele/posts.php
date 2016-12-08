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

function get_author($id)
{
	$query = 'SELECT login FROM `users` WHERE `id` = '.$id;
	$result = my_fetch_all($query);

	return $result;
}

?>