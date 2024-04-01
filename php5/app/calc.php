<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/app/CalcController.class.php';

include $conf->root_path.'../auth/set.php';






$controller = new CalcController();
$controller->calculate();




?>