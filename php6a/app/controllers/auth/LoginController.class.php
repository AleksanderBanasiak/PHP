<?php

require_once 'User.class.php';


 class LoginController{



 
	private $user;   

    public function __construct(){
		$this->user = new User();
      
	}


    
    public function getUserParams(){
        $this->user->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $this->user->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
    }

    
    public function validateUser(){
	
        if (!(isset($this->user->login) && isset($this->user->password))) return false;

        if ( $this->user->login == "") getMessages()->addError('Nie podano loginu');
        
        if ( $this->user->password == "") getMessages()->addError('Nie podano hasła');;
        
        if ($this->user->login == "admin" && $this->user->password == "admin") {
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->user->login == "user" && $this->user->password == "user") {
            session_start();
            $_SESSION['role'] = 'user';
            return true;
        }
	
	    return false; 
    }

    
    public function login(){
        global $conf;

        $this->getUserParams();

        if($this->validateUser()){
            header("Location: ".$conf->app_url);
        }

        $this->generateSmartyForUser();
    }





    public function generateSmartyForUser(){

    

        getSmarty()->assign('page_title','Zadanie 5  Kontroler główny');
        getSmarty()->assign('page_header','Wykonał Alekasnder Banasiak');


        getSmarty()->assign('user',$this->user);
   

        getSmarty()->display('login.html');




    }

 }
 ?>