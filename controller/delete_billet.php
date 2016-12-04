<?php

require_once('modele/user.php');

$query = 'DELETE FROM `billets` WHERE `idBillet` = '.$_GET['billet'];
my_query($query);

$message = 'L\'article a été supprimé !';
$template = 'home';