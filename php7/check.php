<?php
use app\forms\User;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;


if (!(isset($user) && isset($user->login) && isset($user->password)) ){
	$ctrl = new app\controllers\LoginController();
	$ctrl->generateSmartyForUser();
	exit();
}
?>