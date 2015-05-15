<?php
spl_autoload_register();

/* http://192.168.56.101/final_project/users.php*/

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "Landing Page";

require('views/header.view.php');
require('views/users/list.view.php');
require('views/footer.view.php');
