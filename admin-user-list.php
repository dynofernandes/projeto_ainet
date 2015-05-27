<?php

require 'bootstrap.php';

use Ainet\Controllers\UserController;
use Ainet\Controllers\AuthenticationController;

$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}

$authenticated = true;

$controller = new UserController;
$users = $controller->listUsers();
$title = "Dashboard";

require('views/header.view.php');
require('views/admin/user-list.view.php');
require('views/footer.view.php');