<?php
require_once 'init.php';

	getRouter()->setDefaultRoute('login'); 
	getRouter()->setLoginRoute('login'); 

	getRouter()->addRoute('generateSmarty', 'CalcController',  ['user','admin']);
	getRouter()->addRoute('calc', 'CalcController',  ['user','admin']);
	getRouter()->addRoute('login', 'LoginController');
	getRouter()->addRoute('logout', 'LoginController', ['user','admin']);

	getRouter()->go(); 


?>
