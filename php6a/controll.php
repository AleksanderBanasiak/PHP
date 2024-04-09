<?php
require_once 'init.php';


switch ($action) {
	default : 
    include_once 'app/controllers/calc/CalcController.class.php';

    include 'app/controllers/auth/set.php';

    $controller = new CalcController();
    $controller->calculate();
	break;
	case 'login' :
        include_once 'app/controllers/auth/LoginController.class.php';

		$login = new LoginController();
        $login->login();
	break;
	case 'calc' :
        include_once 'app/controllers/calc/CalcController.class.php';

        include 'app/controllers/auth/set.php';

        $controller = new CalcController();
        $controller->calculate();
	break;
    case 'logout' :
        include_once 'app/controllers/calc/CalcController.class.php';
        include 'controllers/auth/set.php';
	break;

}
