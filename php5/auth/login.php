<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/auth/LoginController.class.php';






$login = new LoginController();
$login->login();






?>