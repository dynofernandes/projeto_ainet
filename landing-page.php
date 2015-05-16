<?php

require 'bootstrap.php';

/* http://192.168.56.101/final_project/landing-page.php*/

use Ainet\Controllers\AuthenticationController;

$authController = new AuthenticationController();
if(!$authController->isAuthenticated()) {
	$authController->redirectToLogin();
}
$authenticated = true;

$title = "Landing Page";

require('views/header.view.php');
require('views/visitor/landing.view.php');
require('views/footer.view.php');
