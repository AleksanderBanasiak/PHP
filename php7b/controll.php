<?php
require_once 'init.php';

	getRouter()->setDefaultRoute('calcShow'); 
	getRouter()->setLoginRoute('login'); 

	getRouter()->addRoute('calcShow', 'CalcController',  ['user','admin']);
	getRouter()->addRoute('calc', 'CalcController',  ['user','admin']);
	getRouter()->addRoute('login', 'LoginController');
	getRouter()->addRoute('logout', 'LoginController', ['user','admin']);

	getRouter()->go(); 


?>
