<?php
spl_autoload_register();

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "List users";

require('views/login.view.php');

