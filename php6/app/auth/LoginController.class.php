<?php

require_once $conf->root_path.'/libs/smarty/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/auth/User.class.php';


 class LoginController{



    private $messages; 
	private $user;   

    public function __construct(){
		$this->user = new User();
        $this->messages = new Messages();
	}


    
    public function getUserParams(){
        $this->user->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $this->user->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
    }

    
    public function validateUser(){
	
        if (!(isset($this->user->login) && isset($this->user->password))) return false;

        if ( $this->user->login == "") $this->messages->addError('Nie podano loginu');
        
        if ( $this->user->password == "") $this->messages->addError('Nie podano hasła');;
        
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

        global $conf;
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Zadanie 5  Kontroler główny');
        $smarty->assign('page_header','Wykonał Alekasnder Banasiak');


        $smarty->assign('user',$this->user);
        $smarty->assign('messages',$this->messages);

        $smarty->display($conf->root_path.'/app/auth/login.html');




    }

 }
 ?>