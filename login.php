<?php
spl_autoload_register();

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "List users";

require('views/header.view.php');
require('views/login.view.php');
require('views/footer.view.php');

