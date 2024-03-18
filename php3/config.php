<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/php/php3');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

function checkIfIsSet(&$param){
	if (isset($param)){
		echo $param;
	}
}

$page_title = 'Zadanie 3';
$page_header = 'Wykonał Alekasnder Banasiak';
$page_footer = 'stopka stopka stopka stopka stopka stopka stopka stopka stopka stopka stopka';

?>
