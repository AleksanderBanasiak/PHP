<?php
require_once dirname(__FILE__).'/../config.php';

$login = null;
$password = null;
$messages = array();

function getUserParams(&$login,&$password){
	$login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
	$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
}

function validateUser(&$login,&$password,&$messages){
	
	if (!(isset($login) && isset($password))) return false;

	if ( $login == "") $messages [] = 'Nie podano loginu';
	
	if ( $password == "") $messages [] = 'Nie podano hasła';
	
	if (count ( $messages ) != 0) return false;

	if ($login == "admin" && $password == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($login == "user" && $password == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}


getUserParams($login,$password);
if (validateUser($login,$password,$messages)) header("Location: "._APP_URL);

include _ROOT_PATH.'/auth/login_view.php';
?>