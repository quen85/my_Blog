<?php

require_once('modele/posts.php');

delete_post($_GET['post']);

$message = 'L\'article a été supprimé !';
$template = 'home';
$action = 'home';