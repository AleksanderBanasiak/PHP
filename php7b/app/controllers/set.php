<?php
require_once dirname(__FILE__).'/../../config.php';

session_start();

$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";

if (empty($role)){
	// require_once $conf->root_path.'/app/controllers/LoginController.class.php';
	$login = new app\controllers\LoginController();
	$login->login();
	exit();
}
?>