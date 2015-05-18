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
list($user,$errors)=$controller->editUser();
$title = "Editar Utilizador";

require('views/header.view.php');
require('views/admin/user-edit.view.php');
require('views/footer.view.php');
