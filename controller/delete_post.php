<?php

require_once('modele/user.php');

$query = 'DELETE FROM `posts` WHERE `idPost` = '.$_GET['post'];
my_query($query);

$message = 'L\'article a été supprimé !';
$template = 'home';