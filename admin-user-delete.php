<?php

require 'bootstrap.php';

use Ainet\Controllers\UserController;
use Ainet\Controllers\AuthenticationController;

$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}
$authenticated = true;

$controller = new UserController();
$controller->deleteUser();
$title = "Eliminar Utilizador";


