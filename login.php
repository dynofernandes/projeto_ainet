<?php
spl_autoload_register();

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "Login";

require('views/header.view.php');
require('views/login.view.php');
require('views/footer.view.php');

