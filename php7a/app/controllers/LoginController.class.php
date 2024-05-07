<?php

namespace app\controllers;

use app\forms\User;


 class LoginController{
 
	private $user;   

    public function __construct(){
		$this->user = new User();
	}

    public function getUserParams(){
        $this->user->login = getFromRequest('login');
        $this->user->password = getFromRequest('password');
    }

    
    public function validateUser(){
        
        if (!(isset($this->user->login) && isset($this->user->password))) return false;
		
        if ( $this->user->login == "") getMessages()->addError('Nie podano loginu');
        
        if ( $this->user->password == "") getMessages()->addError('Nie podano hasła');
      
        if ($this->user->login == "admin" && $this->user->password == "admin") {
            $userForm = new User($this->user->login, 'admin');
            $_SESSION['userForm'] = serialize($userForm);
            addRole('admin');

            return true;
        }
        if ($this->user->login == "user" && $this->user->password == "user") {
            $userForm = new User($this->user->login, 'user');
            $_SESSION['userForm'] = serialize($userForm);
            addRole('user');
            return true;
        }
	    return false; 
    }

    
    public function login(){
        $this->getUserParams();

        
        if($this->validateUser()){
            header("Location: ".getConf()->app_url);

        }
        $this->generateSmartyForUser();
    }

    public function logout(){
		session_destroy();
		$this->generateSmartyForUser();		 
	}

    public function generateSmartyForUser(){
        getSmarty()->assign('page_title','Zadanie 6a Ochrona zasobów');
        getSmarty()->assign('page_header','Wykonał Alekasnder Banasiak');
        getSmarty()->assign('user',$this->user);
        getSmarty()->display('login.html');
    }
 }
 ?>