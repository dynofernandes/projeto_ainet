<?php
spl_autoload_register();

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "User Management";

require('views/header.view.php');
require('views/users/user.management.view.php');
require('views/footer.view.php');
