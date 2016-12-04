<?php

//init
session_start();
require_once('includes/utils.php');
my_mysqli_connect();

//conf
$action = 'home';
$layout = 'default';

//router
if (!empty($_GET['action'])) 
{
	$action = $_GET['action'];
}

$template = $action;

//controller

if (file_exists('controller/'.$action.'.php')) 
{
	include('controller/'.$action.'.php');
}


include('layout/'.$layout.'.phtml');

?>