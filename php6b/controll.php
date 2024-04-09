<?php
require_once 'init.php';


switch ($action) {
	default : 
    include 'app/controllers/set.php';

    $controller = new app\controllers\CalcController();
    $controller->calculate();
	break;
	case 'login' :
		$login = new app\controllers\LoginController();
        $login->login();
	break;
	case 'calc' :
        include 'app/controllers/set.php';

        $controller = new app\controllers\CalcController();
        $controller->calculate();
	break;
    case 'logout' :
        include 'controllers/set.php';
	break;

}
