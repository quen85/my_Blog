<?php

function get_billets()
{
	$query = 'SELECT * FROM `billets`';
	$results = my_fetch_all($query);

	return $results;
}

function get_billet($id)
{
	$query = 'SELECT * FROM `billets` WHERE `idBillet` = '.$id;
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