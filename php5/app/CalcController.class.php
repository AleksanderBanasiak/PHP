<?php

require_once $conf->root_path.'/libs/smarty/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


 class CalcController{


    private $messages;   
	private $form;   
	private $result;


    public function __construct(){
		
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}


    
public function getParams(){
	$this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$this->form->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}



public function validate(){
	if ( ! (isset($this->form->amount) && isset($this->form->years) && isset($this->form->interest))) return false;
	
	if ($this->form->amount == "") $this->messages->addError('Nie podano kwoty');
	
	if ($this->form->years == "") $this->messages->addError('Nie podano na ile lat chcesz wziąć kredyt');
	
	if ($this->form->interest == "") $this->messages->addError('Nie podano oprocentowania');

	if ($this->messages->isError()) return false; 
	
	if (! is_numeric( $this->form->amount )) $this->messages->addError('Kwota nie jest liczbą całkowitą');

	if ( $this->form->amount < 0 ) $this->messages->addError('Kwota jest ujemna');
	
	if (! is_numeric( $this->form->years )) $this->messages->addError('Lata kredytu nie są liczbą całkowitą');

	if ($this->messages->isError()) return false; 

	if ( $this->form->years <= 0 ) $this->messages->addError('Lata są mniejsze od zera');
		
	if (! is_numeric( $this->form->interest )) $this->messages->addError('Oprocentowanie nie jest liczbą całkowitą');

	if ( $this->form->interest <= 0 ) $this->messages->addError('Oprocentowanie jest ujemne');
	
	if ($this->messages->isError()) return false; 

	 return true;
}

public function calculate(){

    $this->getParams();
		
    if ($this->validate()) {

	$this->form->amount = intval($this->form->amount);
	$this->form->years = intval($this->form->years);
	$this->form->interest = intval($this->form->interest);

	global $role;

	if ($this->form->interest < 20 &&  $role != 'admin'){
		$this->messages->addError('Tylko administrator może dostać oprocentowanie mniejsze niż 20%');
	} else {
		$this->result->result = round($this->form->amount/ (12* $this->form->years) + (($this->form->amount* ($this->form->interest/100) )/12 ));
	}

}

    $this->generateSmarty();
}



public function generateSmarty(){


    global $conf;
    $smarty = new Smarty();	
    $smarty->assign('conf',$conf);

   
    $smarty->assign('page_title','Zadanie 4 OOP');
    $smarty->assign('page_header','Wykonał Alekasnder Banasiak');



    $smarty->assign('form',$this->form);
    $smarty->assign('messages',$this->messages);
    $smarty->assign('result',$this->result);
 


    $smarty->display($conf->root_path.'/app/calc.html');



}




}
?>