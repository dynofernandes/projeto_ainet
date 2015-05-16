<?php

require 'bootstrap.php';

use Ainet\Controllers\AuthenticationController;

$controller = new AuthenticationController();

if($controller->isAuthenticated()) {
	$controller->redirectToHome();
}

$user = $controller->user;
$errors = $controller->errors;

$title = "Login";
$authenticated = null;

require('views/login.view.php');
require('views/footer.view.php');

