<?php

require 'bootstrap.php';

use Ainet\Controllers\UserController;

$controller = new UserController;
$title = "Dashboard";

require('views/header.view.php');

/*
 * FAZER VALIDAÇÃO SE ESTÁ LOGADO E QUAL O SEU ROLE
require('views/admin/user-management.view.php');
*/

require('views/footer.view.php');
