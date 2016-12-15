<?php

require_once('modele/comments.php');

delete_comment($_GET['comment']);

$message = 'Le commentaire a été supprimé !';
$template = 'single';
$action = 'single&id='.$_GET['id'];