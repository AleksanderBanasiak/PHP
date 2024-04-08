<?php

require_once dirname (__FILE__).'/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default : 
    include_once $conf->root_path.'/app/calc/CalcController.class.php';

    include $conf->root_path.'/app/auth/set.php';

    $controller = new CalcController();
    $controller->calculate();
	break;
	case 'login' :
        include_once $conf->root_path.'/app/auth/LoginController.class.php';

		$login = new LoginController();
        $login->login();
	break;
	case 'calc' :
        include_once $conf->root_path.'/app/calc/CalcController.class.php';

        include $conf->root_path.'/app/auth/set.php';

        $controller = new CalcController();
        $controller->calculate();
	break;
    case 'logout' :
        include_once $conf->root_path.'/app/CalcController.class.php';
        include $conf->root_path.'../auth/set.php';
	break;

}
