<?php
require_once 'init.php';
getConf()->login_action = 'login';

    switch ($action) {
        default :
		control('app\\controllers', 'CalcController', 'calculate', ['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginController',	'login');
	case 'calc' : 
		control(null, 'CalcController',	'calculate', ['user','admin']);
	case 'logout' : 
		control(null, 'LoginController', 'logout', ['user','admin']);
    }
?>
